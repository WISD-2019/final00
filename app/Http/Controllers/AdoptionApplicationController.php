<?php

namespace App\Http\Controllers;

use App\AdoptionApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdoptionApplicationController extends Controller
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
        //取得會員所有的領養申請
        $adoptionApplications=Auth::user()->member->adoption_applications()->get();
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
        auth()->user()->member->adoption_applications()->create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdoptionApplication  $adoptionApplicaiton
     * @return \Illuminate\Http\Response
     */
    public function show(AdoptionApplication $adoptionApplication)
    {
        //
        return view('', ['adoptionApplication'=>$adoptionApplication]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdoptionApplication  $adoptionApplicaiton
     * @return \Illuminate\Http\Response
     */
    public function edit(AdoptionApplication $adoptionApplication)
    {
        //
        return view('', ['adoptionApplication'=>$adoptionApplication]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdoptionApplication  $adoptionApplicaiton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdoptionApplication $adoptionApplication)
    {
        //
        $adoptionApplication->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdoptionApplication  $adoptionApplicaiton
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdoptionApplication $adoptionApplication)
    {
        //
        $adoptionApplication->delete();
    }
}
