<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Recruiment;
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
        $num_post_accept = Recruiment::where('RegStatus',1)->get()->count();
        $num_post_required = Recruiment::where('RegStatus',0)->get()->count();
        return view('admin.index', ['num_post_accept' => $num_post_accept, 'num_post_required' => $num_post_required, 'num_admin' => $num_admin]);
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
