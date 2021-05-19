<?php

namespace App\Http\Controllers;

use App\Models\Service_history;
use Illuminate\Http\Request;

class ServiceHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $history = Service_history::all();
        return view('dashboard.admins.history')->with('history', $history);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Service_history  $service_history
     * @return \Illuminate\Http\Response
     */
    public function show(Service_history $service_history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service_history  $service_history
     * @return \Illuminate\Http\Response
     */
    public function edit(Service_history $service_history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service_history  $service_history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service_history $service_history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service_history  $service_history
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service_history $service_history)
    {
        //
    }
}
