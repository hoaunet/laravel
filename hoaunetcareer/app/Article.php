<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';
    
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
	public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
