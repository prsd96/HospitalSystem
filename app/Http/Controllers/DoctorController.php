<?php
namespace App\Http\Controllers;
use App\Models\DoctorMain;
use App\Models\HospitalMain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index()
    {
        return view('indexdoc',
        ['doctorlist'=>DoctorMain::select('doctor_mains.*', 'hospital_mains.hname as dochospname')
        ->join('hospital_mains', 'hospital_mains.id', '=', 'doctor_mains.dhosp')
        ->where('doctor_mains.dstatus', 1)
        ->get() ]);
    }

    public function create()
    {
        return view('createdoc',
        ['doctorhosplist_r'=>HospitalMain::select('id as doctorhospid', 'hname as doctorhospidname')
        ->get() ]);
    }

    public function store(Request $request)
    {
        /*SQLSTATE[HY000]: General error: 1364 Field 'dspecial' doesn't have a default value*/

        DB::insert('
        insert into doctor_mains (dfirstname, dlastname, dhosp, dspecial, dcontact, updated_at, created_at)
        values (?, ?, ?, ?, ?, ?, ?)',
        [$request->dfirstname, $request->dlastname, $request->dhosp, $request->dspecial, $request->dcontact, now(), now()]
        );

        //DoctorMain::create($request->all());
        return view('welcome');

        
    }

    public function show($id)
    {
        return view('showdoc',
        ['doctordetails'=>DoctorMain::select('doctor_mains.*', 'hospital_mains.hname as dochosp')
        ->join('hospital_mains', 'hospital_mains.id', '=', 'doctor_mains.dhosp')
        ->where('doctor_mains.id', $id)
        ->firstOrFail() ]);
    }

    public function update($id)
    {
        DoctorMain::where('id',$id)->update(['dstatus'=>'0']);
        return redirect()->route('doctors.index');
    }
}