<?php

namespace App\Http\Controllers;

use App\Models\Registrations;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\RegistrationExport;
use App\Rules\UniqueEventEmailPhone;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
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
        $action = $request->input('action');
        // dd($eventId); // Get the current event ID;

        // Check if the registration record already exists
        $existingRegistration = Registrations::where('event_id', $eventId)
            ->where('email', $request->input('email'))
            ->where('phone', $request->input('phone'))
            ->first();

        if ($existingRegistration) {
            Alert::toast('Registration already exists', 'error');
            return redirect()->back();
        }

        if ($action === 'save') {
            # code...
            $request->validate([
                'email' => ['required', 'email'],
                'phone' => ['required', 'numeric'],
                'name' => ['required', 'string'],
                'event_id' => ['required', 'numeric'],
                'gender' => '',
                'company' => '',
                'position' => '',
                'address' => '',
                'city' => '',
                'country' => '',
            ]);

            // If validation passes, save the registration record
            Registrations::create([
                'event_id' => $eventId,
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'name' => $request->input('name'),
                'gender' => $request->input('gender'),
                'company' => $request->input('company'),
                'position' => $request->input('position'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'country' => $request->input('country'),

            ]);
            Alert::toast('You have successfully registred for this event', 'success');

            return redirect()->back();
        } elseif ($action === 'submit') {
            # code...
            $request->validate([
                'email' => ['required', 'email'],
                'phone' => ['required', 'numeric'],
                'name' => ['required', 'string'],
                'event_id' => ['required', 'numeric'],
                'gender' => '',
                'company' => 'required',
                'position' => 'required',
                'address' => '',
                'city' => '',
                'country' => '',
            ]);

            // If validation passes, save the registration record
            Registrations::create([
                'event_id' => $eventId,
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'name' => $request->input('name'),
                'gender' => $request->input('gender'),
                'company' => $request->input('company'),
                'position' => $request->input('position'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'country' => $request->input('country'),

            ]);
            Alert::toast('You have successfully registred for this event', 'success');

            return redirect()->back();
        }
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

    public function Downloadpdf(){
        $data = Registrations::all();
        $currentDateTime = date('Y-m-d_H-i-s');

        $pdf = Pdf::loadView('exports.registration', ['data' => $data]);
        return $pdf->download($currentDateTime . '_registred.pdf');
    }
    public function export()
    {
        $currentDateTime = date('Y-m-d_H-i-s');
        return Excel::download(new RegistrationExport, $currentDateTime .'registration.xlsx');
        // $currentDateTime = date('Y-m-d_H-i-s');

        // return Excel::download(new UsersExport, $currentDateTime .'registration.xlsx');
    }
}
