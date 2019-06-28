<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Recruiment;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show Admin Dashboard.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $num_admin = Admin::all()->count();
        $num_post_accept = Recruiment::where('regStatus',1)->get()->count();
        $num_post_required = Recruiment::where('regStatus',0)->get()->count();
        return view('admin.index', ['num_post_accept' => $num_post_accept, 'num_post_required' => $num_post_required, 'num_admin' => $num_admin]);
    }
}
