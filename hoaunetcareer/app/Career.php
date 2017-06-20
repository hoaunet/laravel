<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
    public function employment()
    {
        return $this->hasMany('App\Employment');
    }
   

}
