<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Leagues;
use App\Models\Games;
use Illuminate\Http\Request;
use Carbon;

class LeaguesController extends Controller
{
    public function index()
    {

        $data['leagues'] = Leagues::orderBy('start_time', 'desc')->get();
        $data['games'] = Games::orderBy('view_order')->get();
        return view('dashboard.admin.leagues.list')->with($data);
    }
    public function create(Request $request)
    {

        $league = $request->all();
        Leagues::create([
            'name' => $league['name'],
            'game_id' => $league['game_id'],
            'avatar' => $league['base64_img'][0],
            'description' => $league['description'],
            'location' => $league['location'],
            'start_time' => Carbon::create($league['start_time']),
            'end_time' => Carbon::create($league['start_time']),
        ]);
        return $this->index();
    }
    public function edit(Leagues $league)
    {
        $data['league'] = $league;
        $data['games'] = Games::orderBy('view_order')->get();
        return view('dashboard.admin.leagues.edit')->with($data);
    }

    public function update(Leagues $league, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'name' => $temp['name'],
            'game_id' => $temp['game_id'],
            'description' => $temp['description'],
            'location' => $temp['location'],
            'start_time' => Carbon::create($temp['start_time']),
            'end_time' => Carbon::create($temp['start_time']),
        );
        if (!is_null($temp['base64_img'][0])) $data['avatar'] = $temp['base64_img'][0];
        $league->update($data);
        $request->session()->flash('message', 'league updated successfully!');
        return $this->index();
    }
    public function delete(Leagues $league, Request $request)
    {
        $league->delete();
        $request->session()->flash('message', 'league deleted successfully!');
        return $this->index();
    }
}
