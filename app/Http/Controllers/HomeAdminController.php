<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function getdashbroad()	
    {
    	$post_count = Post::count();
    	$admin_count = Admin::count();
    	$category_count = Category::count();
    	return view('admin.index',['num_post'=> $post_count,'num_admin'=>$admin_count,'num_cate'=>$category_count]);
    }
}
