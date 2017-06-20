<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    //
     public function career()
    {
        return $this->belongsTo('App\Career');
    }
    
}
