<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Mail\EventBooked;

class EventsController extends Controller
{
    /**
     * See admin dashboard
     *
     * @return void
     */
    public function dashboard() {
        return view('pages.manager.dashboard');
    }

    /**
     * View event creation page
     *
     * @return void
     */
    public function create()  {
        return view('pages.manager.add-event');
    }

    /**
     * Create a nea event
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)  {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'director' => 'required',
            'location' => 'required',
            'hour' => 'required',
            'tickets' => 'required|digits_between:1,3',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'background' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $event = new Event;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->user_id = Auth::user()->id;
        $event->regizor = $request->director;
        $event->locatie = $request->location;
        $event->tickets = $request->tickets;
        $datei = $request->date . " " .  $request->hour;
        $imageName = time().'.'.request()->poster->getClientOriginalExtension();
        request()->poster->move(public_path('images'), $imageName);
        $bgName = "bg_".time().'.'.request()->background->getClientOriginalExtension();
        request()->background->move(public_path('images'), $bgName);
        $event->data = Carbon::parse($datei);
        $event->poster = $imageName;
        $event->background = $bgName;
        $event->save();

    
        return redirect()->route('manager.dashboard');
    }

    /**
     * Display admin events
     *
     * @param Request $request
     * @param Event $events
     * @return void
     */
    public function displayEvent(Request $request, Event $events)  {
        $id = $request->route('id');
        $event = $events->where('id', $id)->first();

        return view('pages.event')->with('event', $event);
    }

    /**
     * Display user events
     *
     * @return void
     */
    public function userEvents() {
        $events = Auth::user()->spectacles;
        return view('pages.events')->with('events', $events);
    }
}
