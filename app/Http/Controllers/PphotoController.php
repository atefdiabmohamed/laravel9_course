<?php

namespace App\Http\Controllers;

use App\Models\Pphoto;
use App\Http\Requests\StorePphotoRequest;
use App\Http\Requests\UpdatePphotoRequest;

class PphotoController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePphotoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePphotoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pphoto  $pphoto
     * @return \Illuminate\Http\Response
     */
    public function show(Pphoto $pphoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pphoto  $pphoto
     * @return \Illuminate\Http\Response
     */
    public function edit(Pphoto $pphoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePphotoRequest  $request
     * @param  \App\Models\Pphoto  $pphoto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePphotoRequest $request, Pphoto $pphoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pphoto  $pphoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pphoto $pphoto)
    {
        //
    }
}
