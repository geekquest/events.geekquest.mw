<?php

namespace App\Http\Controllers;

use App\Models\Registrations;
use App\Rules\UniqueEventEmailPhone;
use App\Http\Requests\StoreRegistrationsRequest;
use App\Http\Requests\UpdateRegistrationsRequest;

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
        $eventId =  $request->event_id;
        dd($eventId); // Get the current event ID;

        $request->validate([
            'email' => ['required', 'email', new UniqueEventEmailPhone($eventId)],
            'phone' => ['required', 'numeric', new UniqueEventEmailPhone($eventId)],
            'name' => ['required', 'string'],
            'event_id' => ['required', 'numeric'],
            'gender'=>'',
            'company'=>'',
            'position'=>'',
            'address'=>'',
            'city'=>'',
            'country'=>'',
        ]);

        // If validation passes, save the registration record
        Registrations::create([
            'event_id' => $eventId,
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'name' => $request->input('name'),
            'gender'=>$request->input('gender'),
            'company'=>$request->input('company'),
            'position'=>$request->input('position'),
            'address'=>$request->input('address'),
            'city'=>$request->input('city'),
            'country'=>$request->input('country'),

        ]);


        return redirect()->back()->with('success', 'Registration successful');
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
