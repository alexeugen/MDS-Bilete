<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Mail\EventBooked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Book an event for an user
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request) {
        
        $id = $request->route('id');
        $event = \App\Event::find($id);
        if((int)$event->tickets > 0) {
            $booking = new Booking();
            $booking->user_id = Auth::user()->id;
            $booking->event_id = $id;
    
            $event->tickets = (string)((int)$event->tickets - 1);
            $event->save();
            Mail::to(Auth::user())->send(new EventBooked($event));
    
            $booking->save();
        }
        return redirect('user/events');
    }
}
