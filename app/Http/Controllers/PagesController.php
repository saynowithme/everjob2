<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruiment;
use App\Category;
use App\CV;
use App\Customers;
class PagesController extends Controller
{
    // public function getindex()
    // {
    //     $cates = Category::all(); 
    //     $listcompanies = Customers::all();
    //     $listjob = Recruiment::all();
    //     $listresumes = CV::all();
    //     return view('everjob.index',['cates'=>$cates,'listjob'=>$listjob,'listresumes'=>$listresumes,'listcompanies'=>$listcompanies]);
    // }

    public function getcompanies()
    {
        $lists = Customers::all();
        return view('everjob.company.company',['lists'=>$lists]);
    }

    public function getcompanyinfo($id)
    {
        $cates = Category::all();
        $company = Customers::where('status',1)->where('id',$id)->first();
        return view('everjob.company.companyDetail',['company'=>$company],['cates'=>$cates]);
    }

    public function getjobs()
    {
        $lists = Recruiment::all();
        return view('everjob.job.job',['lists'=>$lists]);
    }

    public function getjobinfo($id)
    {
        $cates = Category::all();
        $job = Recruiment::where('RegStatus',1)->where('RecID',$id)->first();
        return view('everjob.job.jobDetail',['job'=>$job],['cates'=>$cates]);
    }

    public function getcandidates()
    {
        $lists = CV::all();
        return view('everjob.candidate.candidateListing',['lists'=>$lists]);
    }

    public function getcandidateinfo($id)
    {
        $cates = Category::all();
        $cv = CV::where('CVID',$id)->first();
        return view('everjob.candidate.candidateDetail',['cv'=>$cv],['cates'=>$cates]);
    }
    
}
