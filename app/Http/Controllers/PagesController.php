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
        return view('everjob.company.company', ['lists' => $lists]);
    }

    public function getcompanyinfo($id)
    {
        $cates = Category::all();
        $company = Customers::where('status', 1)->where('id', $id)->first();
        return view('everjob.company.companyDetail', ['company' => $company], ['cates' => $cates]);
    }

    public function getjobs(Request $request)
    {
        $filterCategory = request('filter_category');
        $filterLocation = request('filter_location');
        $listJobs = Recruiment::when($request->get('filter-category', false), function ($q) {
            return $q->whereIn('category_id', explode(',', request('filter-category')));
        })->when($request->get('filter-location', false), function ($q) {
            return $q->whereIn('city', explode(',', request('filter-location')));
        })->get();

        $listCategories = Category::all();
        $listLocations = Recruiment::select('city')->distinct()->get();
        return view('everjob.job.job', compact(['listCategories', 'listLocations',  'listJobs', 'filterCategory', 'filterLocation']));
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

    public function getpost()
    {
        $cates = Category::all();
        return view('everjob.job-posting.job-posting', ['cates' => $cates]);
    }

    public function postAdd(Request $request)
    {
        $rules = [
            'name' => 'required|min:3|max:200|unique:recruiment,name',
            'address' => 'required|max:300',
            'company' => 'required|max:300',
            'minsalary' => 'required|max:100',
            'maxsalary' => 'required|max:100',
            'cate' => 'required| integer',
            'jobtype' => 'required|max:100',
            'gender' => 'required|max:100',
            'amount' => 'required|integer',
            'exp' => 'required',
            'regtime' => 'required|integer',
            'doc' => 'required',
            'desc' => 'required',
        ];
        $msg = [
            'title.required' => 'Không được bỏ trống tiêu đề.',
            'title.unique' => 'Tin này đã bị trùng, vui lòng nhập lại!',
            'title.min' => 'Tên tin tức gồm ít nhất 3 ký tự!',
            'title.max' => 'Tên tin tức gồm tối đa 200 ký tự!',
            'des.required' => 'Không được bỏ trống tóm tắt.',
            'des.max' => 'Tóm tắt gồm tối đa 300 ký tự!',
            'content.required' => 'Không được bỏ trống nội dung',
            'category_id.required' => 'Không được bỏ trống chuyên mục.',
            'category_id.integer' => 'Chọn sai chuyên mục.',
            'slug.unique' => 'Url đã tồn tại, vui lòng nhập lại tiều đề!',
            'slug.required' => 'Không được bỏ trống url',
            'slug.alpha_dash' => 'Sai định dạng slug.',
        ];
        $validator = Validator::make($request->all(), $rules, $msg);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $post = new Post();
            $post->title = $request->input('title');
            $post->content = $request->input('content');
            $post->description = $request->input('des');
            $post->status = 0;
            if (Auth::user()->role == 'admin') {
                $post->status = 1;
            }
            $post->slug = $request->input('slug');
            $post->user_id = Auth::user()->id;
            $post->category_id = $request->input('category_id');
            //Upload Image
            if ($request->hasFile('img_post')) {
                $file = $request->file('img_post');
                $file_extension = $file->getClientOriginalExtension(); // Lấy đuôi của file
                $file_name = $file->getClientOriginalName();
                $random_file_name = str_random(4) . '_' . $file_name;
                while (file_exists('upload/posts/' . $random_file_name)) {
                    $random_file_name = str_random(4) . '_' . $file_name;
                }
                $file->move('upload/posts', $random_file_name);
                // $file_upload = new File();
                // $file_upload->name = $random_file_name;
                // $file_upload->link = 'upload/posts/'.$random_file_name;
                // $file_upload->post_id = $post->id;
                // $file_upload->save();
                $post->feture = 'upload/posts/' . $random_file_name;
            } else $post->feture = '';
            $post->save();
            // Inset to table tag.

        }
        Session::flash('flash_success', 'Thêm tin tức thành công.');
        return redirect()->route('list-post');
    }
    // public function getsearch($key, $location, $cate)
    // {
    //     $list = Recruiment::where('')
    // }

}
