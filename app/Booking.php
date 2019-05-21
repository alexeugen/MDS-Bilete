<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Booking extends Pivot
{
    protected $table = 'bookings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'event_id'
    ];
}
