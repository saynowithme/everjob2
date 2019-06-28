<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruiment;
use App\Category;
use App\CV;
use App\Customers;
use Carbon\Carbon;
use Validator;
use Auth;
use Session;
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
        
        $cates = Category::all();
        $lists = Customers::all();
        return view('everjob.company.company', ['lists' => $lists,'cates'=>$cates]);
    }

    public function getcompanyinfo($id)
    {
        $cates = Category::all();
        $company = Customers::where('status', 1)->where('id', $id)->first();
        return view('everjob.company.companyDetail', ['company' => $company], ['cates' => $cates]);
    }

    public function getjobs(Request $request)
    {
        $cates = Category::all();
        $filterCategory = request('filter_category');
        $filterLocation = request('filter_location');
        $listJobs = Recruiment::when($request->get('filter-category', false), function ($q) {
            return $q->whereIn('category_id', explode(',', request('filter-category')));
        })->when($request->get('filter-location', false), function ($q) {
            return $q->whereIn('city', explode(',', request('filter-location')));
        })->get();
        $listCategories = Category::all();
        $listLocations = Recruiment::select('city')->distinct()->get();
        return view('everjob.job.job',compact(['listCategories', 'listLocations',  'listJobs', 'filterCategory', 'filterLocation','cates']));
    }

    public function getjobsbycompany(Request $request,$id)
    {
        $cates = Category::all();
        $filterCategory = request('filter_category');
        $filterLocation = request('filter_location');
        $listJobs = Recruiment::where('user_id',$id)->when($request->get('filter-category', false), function ($q) {
            return $q->whereIn('category_id', explode(',', request('filter-category')));
        })->when($request->get('filter-location', false), function ($q) {
            return $q->whereIn('city', explode(',', request('filter-location')));
        })->get();
        $listCategories = Category::all();
        $listLocations = Recruiment::select('city')->distinct()->get();
        return view('everjob.job.job',compact(['listCategories', 'listLocations',  'listJobs', 'filterCategory', 'filterLocation','cates']));
    }

    public function getjobinfo($id)
    {
        $cates = Category::all();
        $job = Recruiment::where('RegStatus', 1)->where('RecID', $id)->first();
        return view('everjob.job.jobDetail', ['job' => $job], ['cates' => $cates]);
    }

    public function getcandidates()
    {
        $cates = Category::all();
        $lists = CV::all();
        return view('everjob.candidate.candidateListing', ['lists' => $lists], ['cates' => $cates]);
    }

    public function getcandidateinfo($id)
    {
        $cates = Category::all();
        $cv = CV::where('CVID', $id)->first();
        return view('everjob.candidate.candidateDetail', ['cv' => $cv], ['cates' => $cates]);
    }
    
    public function getpostcv()
    {
        $cates = Category::all();
        return view('everjob.candidate.candidateAddCv', ['cates' => $cates]);
    }

    public function cvAdd(Request $request)
    {
    	$rules= [
                'name'=>'required|min:3|max:200|',
                'phone' =>'required',
                'address' =>'required',
                'birthday' =>'required',
                'gender' =>'required',
                'email'=> 'required',
                'job' =>'required',
                'language' =>'required',
                'exp'=> 'required',
                'learn'=> 'required',
                'skill'=> 'required',
    			];
    	$msg = [
    			'name.required'=>'Không được bỏ trống tên công việc.',
    			'name.min'=>'Tên tin tức gồm ít nhất 3 ký tự!',
                'name.max'=>'Tên tin tức gồm tối đa 200 ký tự!',
                'birthday.required'=>'Không được bỏ trống ngày sinh.',
                'phone.required'=>'Không được bỏ trống số điện thoại.',
                'address.required'=>'Không được bỏ trống địa chỉ.',
                'email.required'=>'Không được bỏ trống email.',
                'language.required'=>'Không được bỏ trống trình độ ngoại ngữ.',
                'job.required'=>'Không được bỏ trống công việc.',
                'gender.required'=>'Không được bỏ trống giới tính.',
                'exp.required'=>'Không được bỏ trống kinh nghiệm làm việc.',
                'learn.required'=>'Không được bỏ trống trình độ học vấn.',
                'skill.required'=>'Không được bỏ trống kĩ năng bản thân.',
    			];
		$validator = Validator::make($request->all(), $rules , $msg);
		if ($validator->fails()) {
		    return redirect()->back()
		                ->withErrors($validator)
		                ->withInput();
		} else {
            $cv = new CV();
            $cv->user_id = Auth::user()->id;
            $cv->Name = $request->input('name');
            if($request->input('gender')=="Male"){
                $cv->Gender = 1;
            }
            elseif($request->input('gender')=="Female"){
                $cv->Gender = 2;
            }
            
            $cv->Birthday = $request->input('birthday');
            $cv->CusAdd = $request->input('address');
	    	$cv->Learn = $request->input('learn');
            $cv->LanguageLv = $request->input('language');
            $cv->Skill = "$".$request->input('skill');
            $cv->Experience = $request->input('exp');
            $cv->Job = $request->input('job');
            $cv->Phone = $request->input('phone');
            $cv->Email = $request->input('email');
            
	    	$cv->save();
	    	
	    	
    	}
    	Session::flash('flash_success','Thêm thông tin ứng viên thành công.');
    	return redirect()->route('cv-posting');
    }

    public function getpost()
    {
        $cates = Category::all();
        return view('everjob.job-posting.job-posting', ['cates' => $cates]);
    }
    
    public function postAdd(Request $request)
    {
    	$rules= [
                'name'=>'required|min:3|max:200|unique:recruiments,JobName',
                'city' =>'required',
                'phone' =>'required',
                'address' =>'required',
                'company' =>'required',
                'minsalary' =>'required',
                'maxsalary' =>'required',
                'cate'=> 'required|integer',
                'jobtype' =>'required',
                'gender' =>'required',
                'amount' =>'required|integer',
                'exp'=> 'required',
                'regtime'=> 'required|integer',
                'doc'=> 'required',
                'desc'=> 'required',
    			];
    	$msg = [
    			'name.required'=>'Không được bỏ trống tên công việc.',
    			'name.unique' => 'Tên công việc này đã bị trùng, vui lòng nhập lại!',
    			'name.min'=>'Tên tin tức gồm ít nhất 3 ký tự!',
                'name.max'=>'Tên tin tức gồm tối đa 200 ký tự!',
                'city.required'=>'Không được bỏ trống thành phố.',
                'phone.required'=>'Không được bỏ trống số điện thoại.',
                'address.required'=>'Không được bỏ trống địa chỉ.',
                'company.required'=>'Không được bỏ trống tên công ty.',
                'minsalary.required'=>'Không được bỏ trống mức lương tối thiểu.',
                'maxsalary.required'=>'Không được bỏ trống mức lương tối đa.',
    			'cate.required'=> 'Không được bỏ trống chuyên mục.',
                'cate.integer'=> 'Chọn sai chuyên mục.',
                'jobtype.required'=>'Không được bỏ trống loại công việc.',
                'gender.required'=>'Không được bỏ trống giới tính cần tuyển.',
                'amount.required'=>'Không được bỏ trống số lượng tuyển.',
                'amount.integer'=> 'Số lượng tuyển phải là số.',
                'exp.required'=>'Không được bỏ trống kinh nghiệm yêu cầu.',
                'regtime.required'=>'Không được bỏ trống thời gian đăng ký hiển thị tin.',
                'regtime.integer'=> 'Thời gian đăng ký hiển thị tin tuyển phải là số.',
                'doc.required'=>'Không được bỏ trống tài liệu ứng tuyển.',
                'desc.required'=>'Không được bỏ trống giới thiệu công việc.',
    			];
		$validator = Validator::make($request->all(), $rules , $msg);
		if ($validator->fails()) {
		    return redirect()->back()
		                ->withErrors($validator)
		                ->withInput();
		} else {
            $job = new Recruiment();
            $job->user_id = Auth::user()->id;
            $job->category_id = $request->input('cate');
            $job->JobName = $request->input('name');
            $job->city = $request->input('city');
            $job->CompanyPhone = $request->input('phone');
	    	$job->CompanyAdd = $request->input('address');
            $job->CompanyName = $request->input('company');
            $job->LevelGra = "$".$request->input('minsalary')." - "."$".$request->input('maxsalary');
            $job->JobType = $request->input('jobtype');
            $job->Gender = $request->input('gender');
            $job->Amount = $request->input('amount');
            $job->Experience = $request->input('exp');
            $job->RegTime = $request->input('regtime');
            $job->Document = $request->input('doc');
            $job->bio = $request->input('desc');
            $job->RegDate = Carbon::now();
            $job->LevelHot = 3;
            if(Auth::user()->id){
                $job->RegStatus = 1;
            }
	    	$job->save();
	    	
	    	
    	}
    	Session::flash('flash_success','Thêm thông tin tuyển dụng thành công.');
    	return redirect()->route('job-posting');
    }

    public function getsearch(Request $request)
    {
        $cates = Category::all();
        $filterCategory = request('filter_category');
        $filterLocation = request('filter_location');
        $listCategories = Category::all();
        $listLocations = Recruiment::select('city')->distinct()->get();

        $key = $request->input('key');
        $city = $request->input('city');
        $cate = $request->input('cate');
        
        if($key==null&&$city==null&&$cate==null){
            $listJobs = Recruiment::when($request->get('filter-category', false), function ($q) {
                return $q->whereIn('category_id', explode(',', request('filter-category')));
            })->when($request->get('filter-location', false), function ($q) {
                return $q->whereIn('city', explode(',', request('filter-location')));
            })->get();
        }
        elseif($key==null&&$city==null){
            $listJobs = Recruiment::when($request->get('filter-category', false), function ($q) {
                return $q->whereIn('category_id', explode(',', request('filter-category')));
            })->when($request->get('filter-location', false), function ($q) {
                return $q->whereIn('city', explode(',', request('filter-location')));
            })->where('category_id', $cate)->get();
        }
        elseif($city==null&&$cate==null){
            $listJobs = Recruiment::when($request->get('filter-category', false), function ($q) {
                return $q->whereIn('category_id', explode(',', request('filter-category')));
            })->when($request->get('filter-location', false), function ($q) {
                return $q->whereIn('city', explode(',', request('filter-location')));
            })->where(function($q)use ($key){
                $q->where('CompanyName', 'like', '%'.$key.'%')->orWhere('JobName', 'like', '%'.$key.'%')->orWhere('bio', 'like', '%'.$key.'%')->orWhere('JobType', 'like', '%'.$key.'%');
            })->get();
        }
        elseif($cate==null&&$key==null){
            $listJobs = Recruiment::when($request->get('filter-category', false), function ($q) {
                return $q->whereIn('category_id', explode(',', request('filter-category')));
            })->when($request->get('filter-location', false), function ($q) {
                return $q->whereIn('city', explode(',', request('filter-location')));
            })->where('city', $city)->get();
        }
        elseif($key==null){
            $listJobs = Recruiment::when($request->get('filter-category', false), function ($q) {
                return $q->whereIn('category_id', explode(',', request('filter-category')));
            })->when($request->get('filter-location', false), function ($q) {
                return $q->whereIn('city', explode(',', request('filter-location')));
            })->where('category_id', $cate)->where('city', $city)->get();
        }
        elseif($city==null){
            $listJobs = Recruiment::when($request->get('filter-category', false), function ($q) {
                return $q->whereIn('category_id', explode(',', request('filter-category')));
            })->when($request->get('filter-location', false), function ($q) {
                return $q->whereIn('city', explode(',', request('filter-location')));
            })->where('category_id', $cate)->where(function($q)use ($key){
                $q->where('CompanyName', 'like', '%'.$key.'%')->orWhere('JobName', 'like', '%'.$key.'%')->orWhere('bio', 'like', '%'.$key.'%')->orWhere('JobType', 'like', '%'.$key.'%');
            })->get();
        }
        elseif($cate==null){
            $listJobs = Recruiment::when($request->get('filter-category', false), function ($q) {
                return $q->whereIn('category_id', explode(',', request('filter-category')));
            })->when($request->get('filter-location', false), function ($q) {
                return $q->whereIn('city', explode(',', request('filter-location')));
            })->where('city', $city)->where(function($q)use ($key){
                $q->where('CompanyName', 'like', '%'.$key.'%')->orWhere('JobName', 'like', '%'.$key.'%')->orWhere('bio', 'like', '%'.$key.'%')->orWhere('JobType', 'like', '%'.$key.'%');
            })->get();
        }
        else{
            $listJobs = Recruiment::when($request->get('filter-category', false), function ($q) {
                return $q->whereIn('category_id', explode(',', request('filter-category')));
            })->when($request->get('filter-location', false), function ($q) {
                return $q->whereIn('city', explode(',', request('filter-location')));
            })->where('city', $city)->where('category_id', $cate)->where(function($q)use ($key){
                $q->where('CompanyName', 'like', '%'.$key.'%')->orWhere('JobName', 'like', '%'.$key.'%')->orWhere('bio', 'like', '%'.$key.'%')->orWhere('JobType', 'like', '%'.$key.'%');
            })->get(); 
        }
        return view('everjob.job.job',compact(['listCategories', 'listLocations',  'listJobs', 'filterCategory', 'filterLocation','cates']));
    }

    public function getcate($id){
        $cates = Category::all();
        $filterCategory = request('filter_category');
        $filterLocation = request('filter_location');
        $listCategories = Category::all();
        $listLocations = Recruiment::select('city')->distinct()->get();
        $listJobs = Recruiment::where('category_id',$id)->get();

        return view('everjob.job.jobbycate',compact(['listCategories', 'listLocations',  'listJobs', 'filterCategory', 'filterLocation','cates']));
    }
}
