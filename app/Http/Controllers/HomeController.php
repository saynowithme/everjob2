<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruiment;
use App\Category;
use App\CV;
use App\Customers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cates = Category::all(); 
        $listcompanies = Customers::all();
        $listjob = Recruiment::orderBy('updated_at', 'asc')->get();
        $listjobhots = Recruiment::where('LevelHot',3);
        $listresumes = CV::orderBy('updated_at', 'asc')->get();
        return view('home',['cates'=>$cates,'listjob'=>$listjob,'listresumes'=>$listresumes,'listcompanies'=>$listcompanies,'listjobhots'=>$listjobhots]);
    }
}
