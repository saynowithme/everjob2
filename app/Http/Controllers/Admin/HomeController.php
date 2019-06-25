<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Category;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post_count = Post::count();
        $post_count = 0;
        // $admin_count = Admin::count();
        $admin_count = 0;
    	$category_count = Category::count();
    	return view('admin.index',['num_post'=> $post_count,'num_admin'=>$admin_count,'num_cate'=>$category_count]);
    }

    // public function edit(Request $request)
    // {
    //     $user = $request->user();

    //     return view('backend.home.edit', compact('user'));
    // }

    // public function update(Requests\AccountUpdateRequest $request)
    // {
    //     $user = $request->user();
    //     $user->update($request->all());

    //     return redirect()->back()->with("message", "Account was update successfully!");
    // }
}
