<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationsRequest;
use App\Http\Requests\UpdateRegistrationsRequest;
use App\Models\Registrations;

class RegistrationsController extends Controller
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
    public function store(StoreRegistrationsRequest $request)
    {
        dd($request->all());
    }


    /**
     * Display the specified resource.
     */
    public function show(Registrations $registrations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registrations $registrations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegistrationsRequest $request, Registrations $registrations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registrations $registrations)
    {
        //
    }
}
