<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companyuser extends Model
{
    //
    public function employments()
    {
        return $this->hasMany('App\Employment');
    }
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
