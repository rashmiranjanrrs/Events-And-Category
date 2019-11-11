<?php

namespace App\Http\Resources;
use App\Http\Resources\authorprofile;
use Illuminate\Http\Resources\Json\JsonResource;


class author extends JsonResource
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
            'id' => $this->id,
            'username' => $this->username,
            'firebase_id' => $this->firebase_id,
            'name' => $this->name,
            'email'=> $this->email,
            'email_verified' =>$this->email_verified,
            'authorprofile'=>$this->authorprofile,
            'is_newsletter_subscribed' =>$this->is_newsletter_subscribed,
            'password'=>$this->password,
            'provider'=>$this->provider,
            'last_ip'=>$this->last_ip,
            'last_login' =>$this->last_login,
            'login_counts'=>$this->login_counts
        ];
    }
}
