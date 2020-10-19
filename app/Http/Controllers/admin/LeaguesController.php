<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Leagues;
use App\Models\Games;
use Illuminate\Http\Request;
use Carbon;

class LeaguesController extends Controller
{
    public function index()
    {

        $data['leagues'] = Leagues::orderBy('created_at', 'desc')->get();
        $data['games'] = Games::orderBy('view_order')->get();
        return view('admin.dashboard.leagues.list')->with($data);
    }
    public function create(Request $request)
    {
        $league = $request->all();
        Leagues::create([
            'name' => $league['name'],
            'game_id' => $league['game_id'],
            'short_name' => $league['short_name'],
            'description' => $league['description'],
        ]);
        $request->session()->flash('message', 'New League created successfully!');
        return $this->index();
    }
    public function edit(Leagues $league)
    {
        $data['league'] = $league;
        $data['games'] = Games::orderBy('view_order')->get();
        return view('admin.dashboard.leagues.edit')->with($data);
    }

    public function update(Leagues $league, Request $request)
    {
        // $temp = $request->all();
        // $data = array(
        //     'name' => $temp['name'],
        //     'game_id' => $temp['game_id'],
        //     'short_name' => $temp['short_name'],
        //     'description' => $temp['description'],
        // );
        $league->update($request->all());
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
