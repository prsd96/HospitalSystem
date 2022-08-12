<?php
namespace App\Http\Controllers;
//use App\Models\DoctorMain;
use App\Models\PatientMain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index()
    {
        $patientlist_q = DB::select('
        select CONCAT_WS(" ", doctor_mains.dfirstname, doctor_mains.dlastname) as pdocname, patient_mains.*  
        from patient_mains
        inner join doctor_mains on doctor_mains.id=patient_mains.pdoc
        inner join hospital_mains on hospital_mains.id=doctor_mains.dhosp
        where doctor_mains.dstatus = 1
        ');
        return view('indexpatient',['patientlist'=>$patientlist_q]);

        /*return view('indexpatient',
        ['patientlist'=>PatientMain::select('patient_mains.*', DB::raw("CONCAT( doctor_mains.dfirstname, ' ',doctor_mains.dlastname) as docname"))
        ->join('doctor_mains', 'doctor_mains.id', '=', 'patient_mains.pdoc')
        ->join('hospital_mains', 'hospital_mains.id', '=', 'doctor_mains.dhosp')
        ->where('doctor_mains.dstatus', 1)
        ->get() 
        ->pluck('patient_mains.*', 'docname') ]);*/
    }

    public function create()
    {
        $doclist_q = DB::select('
        select doctor_mains.id as docid,  CONCAT_WS(" ", doctor_mains.dfirstname, doctor_mains.dlastname) as docname
        from doctor_mains 
        inner join hospital_mains on hospital_mains.id=doctor_mains.dhosp 
        where hospital_mains.hstatus=1 and doctor_mains.dstatus = 1
        ');
        return view('createpatient',['doctorhosplist_r'=>$doclist_q]);

        /*
        $users = DB::table('users')->select('id', DB::raw("CONCAT(users.first_name,' ',users.last_name) AS full_name"))->get()->pluck('full_name', 'id');

        $users = User::select("id", DB::raw("CONCAT(users.first_name,' ',users.last_name) as full_name"))
        ->pluck('full_name', 'id');


        return view('createpatient',
        ['doctorhosplist_r'=>PatientMain::select('id as docid', 
        DB::raw("CONCAT( doctor_mains.dfirstname, ,doctor_mains.dlastname) as docname"))
        ->get()
        ->pluck('docid', 'docname')]);
        */
    }

    public function store(Request $request)
    {
        //PatientMain::create($request->all());
        //$getdochosp_q =  DB::select('select doctor_mains.dhosp as dochosp from doctor_mains where doctor_mains.id = ?',[$request->pdoc]);
        
        $getdochosp_q = DB::table('doctor_mains')->where('id', $request->pdoc)->first();

        DB::insert('
        insert into patient_mains (pfirstname, plastname, pdoc, phosp, pcontact, admitdate, updated_at, created_at)
        values (?, ?, ?, ?, ?, ?, ?, ?)',
        [$request->pfirstname, $request->plastname, $request->pdoc, $getdochosp_q->dhosp, $request->pcontact, $request->admitdate, now(), now()]
        );
        
        return view('welcome');
    }

    public function show($id)
    {
        //->select('patient_mains.id, patient_mains.pfirstname, patient_mains.plastname, hospital_mains.hname as dochospname, CONCAT_WS(" ", doctor_mains.dfirstname, doctor_mains.dlastname) as docname, patient_mains.pcontact, patient_mains.admitdate, patient_mains.dischargedate')

        /*$patientdetails_q = DB::table('patient_mains')
        ->select('hospital_mains.hname as dochospname, CONCAT_WS(" ", doctor_mains.dfirstname, doctor_mains.dlastname) as docname, patient_mains.*')
        ->join('doctor_mains', 'doctor_mains.id', '=', 'patient_mains.pdoc')
        ->join('hospital_mains', 'hospital_mains.id', '=', 'doctor_mains.dhosp')
        ->where('patient_mains.id', $id)
        ->firstOrFail();*/

        $patientdetails_q = DB::select('
        select hospital_mains.hname as dochospname, CONCAT_WS(" ", doctor_mains.dfirstname, doctor_mains.dlastname) as docname, patient_mains.* 
        from patient_mains 
        inner join doctor_mains on doctor_mains.id = patient_mains.pdoc
        inner join hospital_mains on hospital_mains.id = doctor_mains.dhosp
        where patient_mains.id = ?', [$id]);
        
        return view('showpatient', ['patientdetails'=>$patientdetails_q]);

        /*return view('showpatient',
        ['doctordetails'=>PatientMain::select('doctor_mains.*', 'hospital_mains.hname as dochosp')
        ->join('doctor_mains', 'doctor_mains.id', '=', 'patient_mains.pdoc')
        ->join('hospital_mains', 'hospital_mains.id', '=', 'doctor_mains.dhosp')
        ->where('doctor_mains.id', $id)
        ->firstOrFail() ]);*/
    }

    public function update($id)
    {
        //DB::update('update patient_mains set pstatus = ? where id = ?', ['0',$id] );
        PatientMain::where('id',$id)->update(['pstatus'=>'0']);
        return redirect()->route('hospitals.index');
    }
}
