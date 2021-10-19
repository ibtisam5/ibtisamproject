<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mention extends Model
{
    //Rlationship
    public function user()
    {
        return $this->belongsTo(User::class);

    }

}
