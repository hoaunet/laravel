<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    public function employments()
    {
        return $this->hasMany('App\Employment');
    }
}
