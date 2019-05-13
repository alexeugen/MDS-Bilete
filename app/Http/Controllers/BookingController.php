<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function store(Request $request) {
        $booking = new Booking();

        $booking->user_id = Auth::user()->id;
        $booking->event_id = 14;

        $booking->save();
    }
}
