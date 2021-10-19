<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExternalTasK extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);

    }
      /*public function user()
{
 return $this->belongsToMany('App\User','user_id','title','completed');
}*/
}

