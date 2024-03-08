<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function index()
    {
        return view('welcome');
    }
    public function showEvents()
    {
        return view('shows');
    }

    public function registration(Event $event){
        return view('eventregister', compact('event'));

    }
}
