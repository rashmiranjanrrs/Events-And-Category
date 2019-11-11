<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firebase_id', 'email_verified', 'email', 'name', 'username', 'last_login', 'created_at', 'provider'
    ];

    public function Authorprofile()
    {
    return $this->hasOne(AuthorProfile::class);
    }
}