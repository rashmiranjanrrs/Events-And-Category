<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Event;


class EventCategory extends Model
{
    protected $fillable = [
        'id','name'
    ];
    public  function Events()
    {
        # code...
        return $this->hasMany(Event::class);
    }
}
