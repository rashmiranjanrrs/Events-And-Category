<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class authorprofile extends JsonResource
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
            'author_id' => $this->author_id,
            'image' => $this->image,
            'location' => $this->location,
            'about'=> $this->about
        ];
    }
}
