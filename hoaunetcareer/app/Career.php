<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'careers';
    
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
    public function employment()
    {
        return $this->hasMany('App\Employment');
    }
   

}
