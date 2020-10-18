<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userRoles = Auth::user()->menuroles;
        // if ($userRoles !== 'user,admin')
        //     return redirect()->route('user.home');

            
        $tommorrow = Carbon::tomorrow();
        $weeks_ago = Carbon::tomorrow()->subDays(7);
        $week_days = array();
        $t_r = array(
            'week_data' => array(0, 0, 0, 0, 0, 0, 0),
            'max' => 0,
            'min' => 1000000,
        );   //total registered users;
        $w_r = array(
            'week_data' => array(0, 0, 0, 0, 0, 0, 0),
            'max' => 0,
            'min' => 1000000,
        );   //weekly registered users;
        $logined = array(
            'week_data' => array(0, 0, 0, 0, 0, 0, 0),
            'max' => 0,
            'min' => 1000000,
        );   //weekly logined users;
        $users = User::all();
        $logins = Events::where('created_at', '>', $weeks_ago)->where('type', 'login')->get();
        $weekly_users = User::where('created_at', '>', $weeks_ago)->get();

        foreach ($logins as $event) {
            $days = $tommorrow->diffInDays($event->created_at);
            $logined['week_data'][6 - $days]++;
        }


        foreach ($weekly_users as $user) {
            $days = $tommorrow->diffInDays($user->created_at);
            $w_r['week_data'][6 - $days]++;
        }

        for ($i = 0; $i < 7; $i++) {
            foreach ($users as $user) {
                $days = $tommorrow->diffInDays($user->created_at);
                if ($days > 5 - $i) $t_r['week_data'][$i]++;
            }
            if ($t_r['week_data'][$i] > $t_r['max'])  $t_r['max'] = $t_r['week_data'][$i];
            if ($t_r['week_data'][$i] < $t_r['min']) $t_r['min'] = $t_r['week_data'][$i];

            if ($logined['week_data'][$i] > $logined['max'])  $logined['max'] = $logined['week_data'][$i];
            if ($logined['week_data'][$i] < $logined['min']) $logined['min'] = $logined['week_data'][$i];

            if ($w_r['week_data'][$i] > $w_r['max'])  $w_r['max'] = $w_r['week_data'][$i];
            if ($w_r['week_data'][$i] < $w_r['min']) $w_r['min'] = $w_r['week_data'][$i];

            $week_days[$i] = Carbon::now()->add($i - 6, 'day')->format("d M,D");
        }

        $data = array(
            'users' => count($users),
            'logins' => count($logins),
            'weekly_users' => count($weekly_users),
            'registered' => $t_r,
            'weekly_registered' => $w_r,
            'logined' => $logined,
            'week_days' => $week_days,
        );
        // return redirect('image-cropper');
        return view('admin.dashboard.home')->with(array('data' => $data));
        // return view('auth.terms')->with(array('data' => $data));
    }
}
