<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $event = new Event;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->user_id = Auth::user()->id;
        $event->regizor = $request->director;
        $event->locatie = $request->location;
        $datei = $request->date . " " .  $request->hour;

        $event->data = Carbon::parse($datei);
        $event->save();

        return redirect()->route('manager.dashboard');
    }
}
