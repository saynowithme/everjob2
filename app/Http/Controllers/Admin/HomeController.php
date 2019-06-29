<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Recruiment;
use App\Category;
use Carbon\Carbon;
use Validator;
use Session;
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
        $num_cate = Category::all()->count();
        $num_post_accept = Recruiment::where('regStatus',1)->get()->count();
        $num_post_required = Recruiment::where('regStatus',0)->get()->count();
        $dayBefore = Carbon::now()->subDays(7);
        $regs = DB::table('Recruiments')->select(DB::raw('DAYOFWEEK(RegDate) as DayWeek,count(RecID) as count'))->whereBetween('RegDate',[date($dayBefore),date(now())])->groupBy('DayWeek')->get();
        $users = DB::table('users')->select(DB::raw('DAYOFWEEK(created_at) as Day,count(Id) as count'))->whereBetween('created_at',[date($dayBefore),date(now())])->groupBy('Day')->get();     
        //ngày
        $weekMap = [
                8 => 'SUN',
                2 => 'MON',
                3 => 'TUE',
                4 => 'WED',
                5 => 'THU',
                6 => 'FRI',
                7 => 'SAT',
        ];
        $weekDay = [];
        $reg_count=[];
        foreach ($regs as $reg) {
            $weekday = $weekMap[$reg->DayWeek];
            array_push($weekDay, (string) $weekday);
            array_push($reg_count, $reg->count);
        }
        $weekDay = implode('\', \'', $weekDay);
        $reg_count = implode(", ",$reg_count);
        // 
        $userDay=[];
        $user_count=[];
        foreach ($users as $user ) {
            $day = $weekMap[$user->Day];
            array_push($userDay, (string) $day);
            array_push($user_count, $reg->count);
        }
        $userDay = implode('\', \'', $userDay);
        $user_count = implode(", ",$user_count);
        return view('admin.index', ['num_post_accept' => $num_post_accept,'num_cate'=>$num_cate, 'num_post_required' => $num_post_required, 'num_admin' => $num_admin, 'regs'=>$regs, 'weekday'=>$weekDay, 'reg_count'=>$reg_count, 'users'=>$users, 'userday'=>$userDay, 'user_count'=>$user_count]);
    }

    public function getpostactive(){
        $posts = Recruiment::where('RegStatus',1)->get();
        return view('admin.post.list',['posts'=>$posts]);
    }

    public function updateStatus(Request $request)
    {
        if($request->ajax()){
            $post = Recruiment::find($request->input('RecID'));
            
            if( $post ){
                if($request->input('status')== 0 || $request->input('status')==1 ){
                    $post->RegStatus =$request->input('status');
                    $post->save();      
                    return 'ok';
                } else { return 'Sai trạng thái.';}
               
            } else { return 'Bài viết không tồn tại.'; }
        }
    }

    public function getDelete($id)
    {
    	$post = Recruiment::find($id);
	    	if( $post ){
                if(Auth::user()){
                    $post->delete();
                    Session::flash('flash_success','Xóa thành công.');
                    return redirect()->route('list-post');
                } else {
                    Session::flash('flash_err','Bạn không có quyền xóa bài.');
                    return redirect()->route('list-post');
                }
	    	} else {
	    		Session::flash('flash_err','Bài viết không tồn tại.');
	    	}
	    	return redirect()->route('list-post');
    }

    public function getcate(){
        $cates = Category::all();
        return view('admin.category.list',['cates'=>$cates]);
    }

    public function catedelete($id)
    {
        $cate = Category::find($id);
            if( $cate){
                    $cate->delete();
                    Session::flash('flash_success','Xóa thành công.');
                    return redirect('categories'); 
            } else {
                Session::flash('flash_err','Bài viết không tồn tại.');
            }
            return redirect('categories'); 
    }

    public function getAddCate()
    {
    	$cates = Category::all();
    	return view('admin.category.add',["cates"=>$cates]);
    }
    public function catAdd(Request $req)
    {
        $maxid = Category::OrderBy('id','desc')->first();
        $max=$maxid->id + 1;
    	$this->validate($req,
    		[
    			'cate_name'=>'required|unique:categories,name|min:3|max:70',

    		],
    		[
    			'cate_name.required'=>'Bạn chưa nhập tên chuyên mục!',
                'cate_name.min'=>'Tên chuyên mục gồm ít nhất 3 ký tự!',
                'cate_name.max'=>'Tên chuyên mục gồm tối đa 50 ký tự!',

    		]);
        $cate = new Category();
        $cate->id = $max;
    	$cate->name = $req->input('cate_name');
    	$cate->save();
    	Session::flash('flash_success','Thêm chuyên mục thành công.');
        return redirect('categories');  
    }

    public function getCateUpdate($id)
    {
        $cate = Category::find($id);

        if($cate){
                return view('admin.category.edit',['cate'=>$cate]);
        }
        else {
            Session::flash('flash_err','Sai Thông tin Chuyên mục.');
            return redirect('categories');
        }
        
    }

    public function catUpdate(Request $request, $id)
    {
    	$cate = Category::find($id);
        if( $cate ) {
                $rules= [
                        'name'=>'required|min:3|max:30|unique:categories,name',
                    ];
                $msg = [
                        'name.required'=>'Không được bỏ trống tiêu đề.',
                        'name.unique' => 'Tin này đã bị trùng, vui lòng nhập lại!',
                        'name.min'=>'Tên tin tức gồm ít nhất 3 ký tự!',
                        'name.max'=>'Tên tin tức gồm tối đa 30 ký tự!',
                    ];

                $validator = Validator::make($request->all(), $rules , $msg);

                if ($validator->fails()) {
                    return redirect()->back()
                                ->withErrors($validator)
                                ->withInput();
                } else {
                    $cate->name = $request->input('name');
                    $cate->save();
                    Session::flash('flash_success','Thay đổi thành công.');
                    return redirect('categories');
                }
        } else {
            Session::flash('flash_err','Sai thông tin bài viết.');
            return redirect('categories');
        }
    }
}
