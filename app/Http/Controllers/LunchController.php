<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLunchRequest;
use App\Http\Requests\UpdateLunchRequest;
use App\Models\Lunch;

class LunchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLunchRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lunch $lunch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lunch $lunch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLunchRequest $request, Lunch $lunch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lunch $lunch)
    {
        //
    }
}
