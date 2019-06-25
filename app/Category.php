<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function recruiment()
    {
        return $this->hasMany('App\Recruitment','category_id','id');
    }
}
