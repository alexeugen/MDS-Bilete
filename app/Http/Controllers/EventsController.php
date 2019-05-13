<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    public function dashboard() {
        return view('pages.manager.dashboard');
    }

    public function create()  {
        return view('pages.manager.add-event');
    }

    public function store(Request $request)  {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'director' => 'required',
            'location' => 'required',
            'hour' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'background' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $event = new Event;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->user_id = Auth::user()->id;
        $event->regizor = $request->director;
        $event->locatie = $request->location;
        $datei = $request->date . " " .  $request->hour;
        $imageName = time().'.'.request()->poster->getClientOriginalExtension();
        request()->poster->move(public_path('images'), $imageName);
        $bgName = "bg_".time().'.'.request()->background->getClientOriginalExtension();
        request()->background->move(public_path('images'), $bgName);
        $event->data = Carbon::parse($datei);
        $event->poster = $imageName;
        $event->background = $bgName;
        $event->save();

        // dd($event->data);

        return redirect()->route('manager.dashboard');
    }

    public function displayEvent(Request $request, Event $events)  {
        $id = $request->route('id');
        $event = $events->where('id', $id)->first();

        return view('pages.event')->with('event', $event);
    }
}
