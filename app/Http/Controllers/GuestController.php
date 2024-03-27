<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Http\Requests\StoreGuestRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateGuestRequest;


class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allguest = Guest::all();
        return view('guest.index', compact('allguest'));
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
    public function store(StoreGuestRequest $request)
    {
        // dd($request->all());
      Guest::create($this->validateRequest()) ;
      Alert::toast('You have successfully submitted a  guest', 'success');


      return redirect()->back();
    }

    private function validateRequest()
    {
        return request()->validate([
            'gname' => 'required',
            'gemail' => '',
            'gmessage' => '',
            'gmobile' => '',
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuestRequest $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest)
    {
        //
    }
}
