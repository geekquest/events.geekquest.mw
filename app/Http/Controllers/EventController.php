<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\forms;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        $forms = forms::all();
        return view('events.index', compact('events', 'forms'));
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
    public function store(StoreEventRequest $request)
    {


            $data = $this->validateRequest();


            if ($request->venue == null) {
                $data['venue'] = 'Tech Malawi Discord Server';
            } else {
                $data['venue'] = $request->venue;
            }
            if ($request->time != null) {
                $inputTime = $request->input('time');
                $inputDuration = $request->input('duration');
                // Convert input time to Carbon instance
                $startTime = Carbon::createFromFormat('H:i', $inputTime);
                // Parse the duration to get the hours and minutes
                $durationParts = explode(' ', $inputDuration);
                $hours = (int)$durationParts[0];
                $minutes = ($durationParts[1] == 'hours') ? 0 : (int)$durationParts[1];
                // Add the duration to the start time
                $endTime = $startTime->copy()->addHours($hours)->addMinutes($minutes);
                // Format the end time
                $endTimeFormatted = $endTime->format('H:i');
                $data['time_to'] = $endTimeFormatted;

                // dd($endTimeFormatted);
            }
            $data['topic'] = $request->topic;
            $data['user_id'] = Auth::user()->id;
            $data['form_id'] = $request->form_id;
            $data['date'] = $request->date;
            $data['message'] = $request->message;

            $event = Event::create($data);
            $this->storeimageone($event);

            return redirect()->back();

    }

    private function validateRequest()
    {
        return request()->validate([
            'topic' => 'required',
            'date' => 'required',
            'image' => 'required|image',
            'time' => 'required',
            'duration' => '',
        ]);
    }

    private function storeimageone($event)
    {
        if (request()->has('image')) {
            $event->update([
                'image' => request()->image->store('uploads/image', 'public'),
            ]);
            $image = Image::make('storage/' . $event->image);
            // ->fit(346, 208);
            $image->save();
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
