<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruiment extends Model
{
    protected $primaryKey = 'RecID';
    public $table = 'recruiments';
    public function customer()
    {
    	return $this->belongsTo('App\Customer','CusID','RecID','city');
    }
}
