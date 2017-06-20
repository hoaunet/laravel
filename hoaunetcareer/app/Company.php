<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    public function companyusers()
    {
        return $this->hasMany('App\Companyuser');
    }
    public function companysizes()
    {
        return $this->belongsTo('App\Companysize');
    }
    
}
