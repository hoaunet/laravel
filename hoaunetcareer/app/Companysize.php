<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companysize extends Model
{
    //
    public function companies()
    {
        return $this->hasMany('App\Company');
    }
}
