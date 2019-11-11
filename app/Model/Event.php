<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    protected $fillable = [
        'id','name', 'image', 'description','event_category_id', 'created_at','updated_at', 'start','end'
    ];

    public function EventCategory()
    {
    return $this->hasOne(EventCategory::class);
    }
}
