<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index()
    {
        $event= Event::orderBy('date', 'asc')->first();

        // dd($event);
        return view('welcome', compact('event'));
    }
    public function showEvents()
    {
        return view('shows');
    }

    public function registration(Event $event){
        return view('eventregister', compact('event'));

    }
}
