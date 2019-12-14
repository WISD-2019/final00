<?php

namespace App\Http\Controllers;

use App\AdoptionApplicaiton;
use Illuminate\Http\Request;

class AdoptionApplicaitonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $adoptionApplications=Auth::user()->member()->adoption_applications()->where()->get();
        return view('', ['adoptionApplications'=>$adoptionApplications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('');
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
        auth()->user()->member()->adoption_applications()->create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdoptionApplicaiton  $adoptionApplicaiton
     * @return \Illuminate\Http\Response
     */
    public function show(AdoptionApplicaiton $adoptionApplication)
    {
        //
        return view('', ['adoptionApplication'=>$adoptionApplication]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdoptionApplicaiton  $adoptionApplicaiton
     * @return \Illuminate\Http\Response
     */
    public function edit(AdoptionApplicaiton $adoptionApplication)
    {
        //
        return view('', ['adoptionApplication'=>$adoptionApplication]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdoptionApplicaiton  $adoptionApplicaiton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdoptionApplicaiton $adoptionApplication)
    {
        //
        $adoptionApplication->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdoptionApplicaiton  $adoptionApplicaiton
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdoptionApplicaiton $adoptionApplication)
    {
        //
        $adoptionApplication->delete();
    }
}
