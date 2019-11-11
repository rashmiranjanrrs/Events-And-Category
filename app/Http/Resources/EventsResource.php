<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
            'eventcategory' => $this->eventcategory->id,
            'eventcategory' => $this->eventcategory->name,
            'start'=> $this->start,
            'end'=> $this->end
        ];
    }
}
