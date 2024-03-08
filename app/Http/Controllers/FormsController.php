<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreformsRequest;
use App\Http\Requests\UpdateformsRequest;
use App\Models\forms;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = forms::all();
        return view('forms.index', compact('forms'));
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
    public function store(StoreformsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(forms $forms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(forms $forms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateformsRequest $request, forms $forms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(forms $forms)
    {
        //
    }
}
