<?php

namespace App\Http\Controllers;

use App\Models\Time;
use App\Http\Requests\StoreTimeRequest;
use App\Http\Requests\UpdateTimeRequest;
use RealRashid\SweetAlert\Facades\Alert;

class TimeController extends Controller
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
    public function store(StoreTimeRequest $request)
    {
        $eventId =  $request->event_id;
        // Check if the registration record already exists
        $existingRegistration = Time::where('event_id', $eventId)
            ->where('time', $request->input('time'))
            ->first();
        if ($existingRegistration) {
            Alert::toast('Reminder already exists', 'success');
            return redirect()->back();
        }

        Time::create([
            'event_id' => $eventId,
            'time' => $request->input('time'),

        ]);
        Alert::toast('You have successfully added a reminder for this event', 'success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Time $time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Time $time)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTimeRequest $request, Time $time)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Time $time)
    {
        //
    }
}
