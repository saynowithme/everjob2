<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Recruiment;
<<<<<<< HEAD
use Session;
=======
use Carbon\Carbon;
>>>>>>> e905b7cc1f6fbf0c7d8b0f07b43792ae557126ce
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
<<<<<<< HEAD
        $num_post_accept = Recruiment::where('RegStatus',1)->get()->count();
        $num_post_required = Recruiment::where('RegStatus',0)->get()->count();
        return view('admin.index', ['num_post_accept' => $num_post_accept, 'num_post_required' => $num_post_required, 'num_admin' => $num_admin]);
=======
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
        return view('admin.index', ['num_post_accept' => $num_post_accept, 'num_post_required' => $num_post_required, 'num_admin' => $num_admin, 'regs'=>$regs, 'weekday'=>$weekDay, 'reg_count'=>$reg_count, 'users'=>$users, 'userday'=>$userDay, 'user_count'=>$user_count]);
>>>>>>> e905b7cc1f6fbf0c7d8b0f07b43792ae557126ce
    }

    public function getpostactive(){
        $posts = Recruiment::where('RegStatus',1)->get();
        return view('admin.post.list',['posts'=>$posts]);
    }

    public function updateStatus(Request $request)
    {
        if($request->ajax()){
            $post = Recruiment::find($request->input('id'));
            if( $post ){
                if( Auth::user()){
                    if($request->input('status')== 0 || $request->input('status')==1 ){
                        $post->RegStatus =$request->input('status');
                        $post->save();
                        return 'ok';
                    } else { return 'Sai trạng thái.';}
                } else { return 'Bạn không đủ quyền'; }
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
}
