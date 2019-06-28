<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Recruiment;
use Carbon\Carbon;
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
    }
}
