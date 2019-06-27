<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruiment extends Model
{
    public $table = 'recruiments';
    public function customer()
    {
    	return $this->belongsTo('App\Customer','CusID','RecID','city');
    }
}
