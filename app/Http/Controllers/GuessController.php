<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreguessRequest;
use App\Http\Requests\UpdateguessRequest;
use App\Models\guess;

class GuessController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreguessRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreguessRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\guess  $guess
     * @return \Illuminate\Http\Response
     */
    public function show(guess $guess)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateguessRequest  $request
     * @param  \App\Models\guess  $guess
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateguessRequest $request, guess $guess)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\guess  $guess
     * @return \Illuminate\Http\Response
     */
    public function destroy(guess $guess)
    {
        //
    }
}
