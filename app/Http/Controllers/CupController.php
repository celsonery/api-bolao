<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecupRequest;
use App\Http\Requests\UpdatecupRequest;
use App\Models\cup;

class CupController extends Controller
{
    public function index()
    {
        return Cup::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function show(cup $cup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecupRequest  $request
     * @param  \App\Models\cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecupRequest $request, cup $cup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function destroy(cup $cup)
    {
        //
    }
}
