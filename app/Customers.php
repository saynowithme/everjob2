<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customers';
    public function recruiment()
    {
        return $this->hasMany('App\Recruiment','CusID','CusID');
    }   
}
