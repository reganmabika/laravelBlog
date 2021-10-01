<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
   // use HasFactory;

    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
