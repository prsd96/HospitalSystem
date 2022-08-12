<?php
namespace App\Http\Controllers;
use App\Models\HospitalMain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{
    public function index()
    {
        //return view('index', ['hospitallist'=>HospitalMain::all()]);

        $hospitallist_q = DB::select('select * from hospital_mains where hstatus = 1');
        return view('indexhosp',['hospitallist'=>$hospitallist_q]);
    }

    public function create()
    {
        return view('createhosp');
    }

    public function store(Request $request)
    {
        HospitalMain::create($request->all());
        return view('welcome');
    }

    public function show($id)
    {
        return view('showhosp',['hospdetails_result'=>HospitalMain::where("id", $id)->firstOrFail()]);
    }

    public function update($id)
    {
        DB::update('update hospital_mains set hstatus = ? where id = ?', ['0',$id] );
        return redirect()->route('hospitals.index');
    }
}
