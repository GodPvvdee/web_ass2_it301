<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Sailor;
use App\Models\Service_history;
use App\Models\Vessel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard.admins.index');
    }
    public function company(){
        $company = Company::all();
        return view('dashboard.admins.company')->with('company', $company);
    }
    public function vessel(){
        $vessel = Vessel::all();
        return view('dashboard.admins.vessel')->with('vessel', $vessel);
    }
    public function search($id){
        $vessel = Vessel::where('company_id', $id)->get();
//        dd($vessel);
        return view('dashboard.admins.vessel')->with('vessel', $vessel);
    }
    public function joblist(){
        $db = DB::table('jobs')->get();
        return view('dashboard.admins.joblist')->with('db', $db);
    }
    public function jobsearch($id){
        $z = Sailor::where('job_status', 1)->orwhere('job_status', 4)->take(100)->get();
        $vid = DB::table('jobs')->where('rank', $id)->first();
//        dd($z);
        return view('dashboard.admins.jobform')->with('z', $z)->with('rankid', $id)->with('vid', $vid);
    }

    public function burtgeh(Request $request){
//        dd($request);

        Service_history::create($request->all());
//        dd($request->rank_id);
        DB::table('sailors')
            ->where('sailor_id', $request->sailor_id)
            ->update(['job_status' => 2]);

        DB::delete('delete from jobs where rank = ?',[$request->rank_id]);

        //        dd($request);

        return redirect('admin/jobs');
    }
}
