<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
     public function employments()
    {
        return $this->hasMany('App\Employment');
    }
}
