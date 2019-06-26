<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruiment;
use App\Category;
use App\CV;
use App\Customers;
class PagesController extends Controller
{
    public function getindex()
    {
        $cates = Category::all(); 
        $listcompanies = Customers::all();
        $listjob = Recruiment::all();
        $listresumes = CV::all();
        return view('everjob.index',['cates'=>$cates,'listjob'=>$listjob,'listresumes'=>$listresumes,'listcompanies'=>$listcompanies]);
    }

    public function getcompanies()
    {
        $lists = Customers::all();
        return view('everjob.company.company',['lists'=>$lists]);
    }

    public function getcompanyinfo($id)
    {
        $cates = Category::all();
        $company = Customers::where('CusStatus',1)->where('CusID',$id)->first();
        return view('everjob.company.companyDetail',['company'=>$company],['cates'=>$cates]);
    }
}
