<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //Rlationship
    public function user()
    {
        return $this->belongsTo(User::class);



       }
}
