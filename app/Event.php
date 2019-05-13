<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'regizor', 'data', 'locatie'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Post');
    }

    public function formattedDate()
    {
        $date = new Carbon($this->data);
    
        return $date->format("d M Y");
    }

    public function formattedTime()
    {
        $date = new Carbon($this->data);
        return $date->format("h:i");
    }
}
