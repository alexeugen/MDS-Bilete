<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function store(Request $request) {
        $id = $request->route('id');
        
        $booking = new Booking();
        $booking->user_id = Auth::user()->id;
        $booking->event_id = $id;

        $booking->save();
    }
}
