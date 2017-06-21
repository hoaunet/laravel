<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comppanies';
    
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
    public function companyusers()
    {
        return $this->hasMany('App\Companyuser');
    }
    public function companysizes()
    {
        return $this->belongsTo('App\Companysize');
    }
    
}
