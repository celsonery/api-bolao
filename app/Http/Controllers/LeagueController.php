<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreleagueRequest;
use App\Http\Requests\UpdateleagueRequest;
use App\Models\league;

class LeagueController extends Controller
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
     * @param  \App\Http\Requests\StoreleagueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreleagueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\league  $league
     * @return \Illuminate\Http\Response
     */
    public function show(league $league)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateleagueRequest  $request
     * @param  \App\Models\league  $league
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateleagueRequest $request, league $league)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\league  $league
     * @return \Illuminate\Http\Response
     */
    public function destroy(league $league)
    {
        //
    }
}
