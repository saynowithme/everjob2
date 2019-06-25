<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruiment;
use App\Category;

class PagesController extends Controller
{
    public function getindex()
    {
        $cates = Category::all(); 
        $lists = Recruiment::all();
        return view('everjob.index',['cates'=>$cates,'lists'=>$lists]);
    }
}
