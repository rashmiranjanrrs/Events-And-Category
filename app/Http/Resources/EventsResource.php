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
            'start' => $this->start,
            'end' => $this->end
        ];
    }

    public function with($request)
    {
        # returns an array, this data will be returned along with what is been returned in the above method
        # file name shld be Author and AuthorProfile, the names of the file shld be same as the class name inside the file
    }
}
