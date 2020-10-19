<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Games;
use App\Models\Teams;
use Illuminate\Http\Request;
use Carbon;

class TeamsController extends Controller
{
    public function index()
    {
        $data['games'] = Games::orderBy('view_order')->get();
        $data['teams'] = Teams::orderBy('game_id')->orderBy('name')->get();
        return view('admin.dashboard.teams.list')->with($data);
    }
    public function create(Request $request)
    {

        $team = $request->all();
        Teams::create([
            'game_id' => $team['game_id'],
            'name' => $team['name'],
            'short_name' => $team['short_name'],
            'description' => $team['description'],
            'avatar' => $team['base64_img'],
        ]);
        $request->session()->flash('message', 'New team created successfully!');
        return $this->index();
    }
    public function edit(Teams $team)
    {
        $data['team'] = $team;
        $data['games'] = Games::orderBy('view_order')->get();
        return view('admin.dashboard.teams.edit')->with($data);
    }

    public function update(Teams $team, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'game_id' => $temp['game_id'],
            'name' => $temp['name'],
            'short_name' => $temp['short_name'],
            'description' => $temp['description'],
            'avatar' => $temp['base64_img'],
        );
        $team->update($data);
        $request->session()->flash('message', 'Team updated successfully!');
        return $this->index();
    }
    public function delete(Teams $team, Request $request)
    {
        $team->delete();
        $request->session()->flash('message', 'Team deleted successfully!');
        return $this->index();
    }
}
