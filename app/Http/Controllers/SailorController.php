<?php

namespace App\Http\Controllers;

use App\Models\Sailor;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class SailorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        //
        $sailor = Sailor::all();
//        dd($sailor);
        return view('dashboard.admins.sailor')->with('sailor', $sailor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.admins.sailorForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sailor_name' => 'required',
            'date_of_birth' => 'required',
            'marital_status' => 'required',
            'address' =>'required',
            'height' =>'required',
            'weight' => 'required',
            'blood_type' =>'required',
            'shoe_size' =>'required',
            'job_status' => 'required'
        ], [
            'sailor_name.required' => 'Хоосон байна!!!',
            'date_of_birth.required' => 'Хоосон байна!!!',
            'marital_status.required' => 'Хоосон байна!!!',
            'address.required' => 'Хоосон байна!!!',
            'height.required' => 'Хоосон байна!!!',
            'weight.required' => 'Хоосон байна!!!',
            'blood_type.required' => 'Хоосон байна!!!',
            'shoe_size.required' => 'Хоосон байна!!!',
            'job_status.required' => 'Хоосон байна!!!',

        ]);
        Sailor::create($request->all());
//        Sailor::create($validatedData);
        return redirect('/admin/sailor/create')->with('message', 'Амжилттай нэмлээ');

    }

    /**
     * Display the specified resource.
     *
     * @param Sailor $sailor
     * @return Response
     */
    public function show(Sailor $sailor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Sailor $sailor
     * @return Response
     */
    public function edit(Sailor $sailor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Sailor $sailor
     * @return Response
     */
    public function update(Request $request, Sailor $sailor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Sailor $sailor
     * @return Response
     */
    public function destroy(Sailor $sailor)
    {
        //
    }
}
