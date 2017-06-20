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
	public function level()
    {
        return $this->belongsTo('App\Level');
    }
    public function experience()
    {
        return $this->belongsTo('App\Experience');
    }
    public function degree()
    {
        return $this->belongsTo('App\Degree');
    }
    public function typework()
    {
        return $this->belongsTo('App\Typework');
    }
    public function province()
    {
        return $this->belongsTo('App\Province');
    }
    public function salary()
    {
        return $this->belongsTo('App\Salary');
    }
    public function language()
    {
        return $this->belongsTo('App\Language');
    }
    public function companyuser()
    {
        return $this->belongsTo('App\Companyuser');
    }

}
