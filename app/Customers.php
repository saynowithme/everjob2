<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'users';
    
    public function recruiment()
    {
        return $this->hasMany('App\Recruiment','user_id','id');
    }   
}
