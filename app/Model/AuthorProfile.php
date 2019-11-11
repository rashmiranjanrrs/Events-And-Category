<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AuthorProfile extends Model
{
    protected $fillable = [
        'id','author_id','image','location','about'
    ];
    public function Author()
    {
    return $this->belongsTo(Author::class);
    }
}
