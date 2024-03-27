<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Registrations;
use Illuminate\Support\Facades\Auth;

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
  public function regtable(Event $event)
    {

        $evntId = $event->id;
        // dd($evntId);

        $registrations = Registrations::where('event_id', $event->id)->get();
        $regf = Registrations::where('event_id', $event->id)->first();
        $comp = $regf->company;
        // dd($comp);

        // dd($registrations);
        return view('eventstable', compact('registrations','comp','regf','evntId'));
    }

    public function nominate(){
        $threevents= Event::orderBy('date', 'asc')->first();

        return view('nominations', compact('threevents')  );

    }

    public function showEvents()
    {
        $events= Event::orderBy('date', 'asc')->get();
        $threevents= Event::orderBy('date', 'asc')->get();


        return view('shows', compact('events','threevents')  );
    }

    public function registration(Event $event){
        return view('eventregister', compact('event'));

    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $events = Event::search($keyword)->get();

        return view('search_results', compact('events'));
    }

    public function adminDestroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');


    }
}
