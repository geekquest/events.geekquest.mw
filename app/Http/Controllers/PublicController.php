<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index()
    {
        $event= Event::orderBy('date', 'asc')->first();
        $events= Event::orderBy('date', 'asc')->get();
        $threevents= Event::orderBy('date', 'asc')->take(3)->get();



        // dd($event);
        return view('welcome', compact('event','events','threevents'));
    }
    public function showEvents()
    {
        return view('shows');
    }

    public function registration(Event $event){
        return view('eventregister', compact('event'));

    }
}
