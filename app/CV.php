<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    protected $table = 'cv';
    public function customer()
    {
    	return $this->belongsTo('App\Customer','CusID','RecID');
    }
}
