<?php

namespace App\Http\Controllers;

use App\Models\Sailor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(){
        return view('dashboard.users.index');
    }
    public function profile($id){
//        Sailor::all();
//        dd($name);
//        $uinfo = Sailor::where('sailor_name', $name)->get();
//        dd($uinfo);
        $user = Sailor::find($id);

//        $user = DB::table('sailors')->where('sailor_name', $name)->first();

        return view('dashboard.users.profile')->with('user', $user);
    }
    public function settings(){
        return view('dashboard.users.settings');
    }
}
