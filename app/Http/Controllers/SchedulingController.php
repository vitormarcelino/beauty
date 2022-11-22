<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Scheduling;
use App\Models\Service;
use Illuminate\Http\Request;

class SchedulingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Patient $patient)
    {
        return view('scheduling.form', [
            'action' => route('scheduling.store'),
            'method' => 'POST',
            'patient' => $patient,
            'services' => Service::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scheduling = Scheduling::create($request->all());
        return redirect(route('patients.show', [$scheduling->patient_id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scheduling  $scheduling
     * @return \Illuminate\Http\Response
     */
    public function show(Scheduling $scheduling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scheduling  $scheduling
     * @return \Illuminate\Http\Response
     */
    public function edit(Scheduling $scheduling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scheduling  $scheduling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scheduling $scheduling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scheduling  $scheduling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scheduling $scheduling)
    {
        //
    }
}
