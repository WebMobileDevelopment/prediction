<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();

        $tommorrow = Carbon::tomorrow();
        $week_data = array(0, 0, 0, 0, 0, 0, 0);
        $week_days = array();
        $max = 0;
        $min = 1000000;
        for ($i = 0; $i < 7; $i++) {
            foreach ($users as $user) {
                $days = $tommorrow->diffInDays($user->created_at);
                if ($days > 5 - $i) {
                    $week_data[$i]++;
                }
            }

            if ($week_data[$i] > $max) {
                $max = $week_data[$i];
            }

            if ($week_data[$i] < $min) {
                $min = $week_data[$i];
            }
            $week_days[$i] = Carbon::now()->add($i-6, 'day')->format("d M,D");
            //['January', 'February', 'March', 'April', 'May', 'June', 'July']

        }
        $data = array(
            'users' => $users,
            'registered' => array(
                'week_data' => $week_data,
                'max' => $max,
                'min' => $min,
            ),
            'week_days' => $week_days,
        );
        return view('dashboard.homepage')->with(array('data' => $data));
    }
}
