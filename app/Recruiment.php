<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruiment extends Model
{
    public function customer()
    {
    	return $this->belongsTo('App\Customer','CusID','RecID');
    }
}
