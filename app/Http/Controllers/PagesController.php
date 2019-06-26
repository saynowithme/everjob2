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

    public function getpost()
    {
        $cates = Category::all();
        return view('everjob.job-posting.job-posting',['cates'=>$cates]);
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
    			'name.required'=>'Không được bỏ trống tiêu đề.',
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
	    	// Inset to table tag.
	    	
    	}
    	Session::flash('flash_success','Thêm thông tin tuyển dụng thành công.');
    	return redirect()->route('job-posting');
    }
    // public function getsearch($key, $location, $cate)
    // {
    //     $list = Recruiment::where('')
    // }
    
}
