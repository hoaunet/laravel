<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typework extends Model
{
    //
     public function employments()
    {
        return $this->hasMany('App\Employment');
    }
}
