<?php

namespace App\Http\Controllers;

use App\Models\infos;
use App\Http\Requests\StoreinfosRequest;
use App\Http\Requests\UpdateinfosRequest;

class InfosController extends Controller
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
    public function create()
    {
        //
    }
    public function getdata(){
        $info=infos::all();
        return view('regester',compact('info'));
       }
       
       public function getid(){
       $id=request('id');
       $info=infos::where('id',$id)->first();
       return view('user',compact('info'));
       }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreinfosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreinfosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\infos  $infos
     * @return \Illuminate\Http\Response
     */
    public function show(infos $infos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\infos  $infos
     * @return \Illuminate\Http\Response
     */
    public function edit(infos $infos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinfosRequest  $request
     * @param  \App\Models\infos  $infos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateinfosRequest $request, infos $infos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\infos  $infos
     * @return \Illuminate\Http\Response
     */
    public function destroy(infos $infos)
    {
        //
    }
}
