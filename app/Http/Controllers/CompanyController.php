<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Rank;
use App\Models\Vessel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.company.index');
    }
    public function profile(){
        $company = Company::find(1);
        return view('dashboard.company.profile')->with('company', $company);
    }
    public function application(){
        $company = Company::find(1);
        $vessel = Vessel::where('company_id', $company->company_id)->take(100)->get();
        $rank = Rank::all();
//        dd($vessel);
        return view('dashboard.company.application')->with('com', $company)->with('vessel', $vessel)->with('rank', $rank);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $req)
    {
        DB::table('jobs')->insert(
            ['cname' => $req->cname, 'vname' => $req->vname, 'rank' => $req->rank]
        );
//        dd($req);
        return redirect()->to('company/application')->with('message', 'Амжилттай хүсэлт гаргалаа!!');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
