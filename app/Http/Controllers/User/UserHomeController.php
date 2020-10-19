<?php

namespace App\Http\Controllers\User;

use App\HTTP\Controllers\Controller;
use App\Models\Banners;
use App\Models\Games;
use App\Models\Matchs;
use Carbon;

class UserHomeController extends Controller
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
    public function index($game_id = null)
    {
        $data['games'] = Games::select(['id', 'name', 'view_order', 'menu_icon'])->orderBy('view_order')->get();
        $data['banners'] = Banners::all();
        $game_id = is_null($game_id) ? $data['games'][0]->id : $game_id;
        $data['game_id'] = $game_id;
        $current = Carbon::now();
        //$game = Games::find($game_id);
        $data['matchs'] = Matchs::where('start_time', '>', $current)->whereHas('league', function ($q) use ($game_id) {
            $q->where('game_id', $game_id);
        })->get();
        return view('user.home')->with($data);
    }
}
