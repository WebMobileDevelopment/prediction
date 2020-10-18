<?php

namespace App\Http\Controllers\admin;

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
            'name' => $team['name'],
            'game_id' => $team['game_id'],
            'country' => $team['country'],
            'location' => $team['location'],
            'description' => $team['description'],
            'avatar' => $team['base64_img'][0],
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
            'name' => $temp['name'],
            'game_id' => $temp['game_id'],
            'country' => $temp['country'],
            'location' => $temp['location'],
            'description' => $temp['description'],
        );
        if (!is_null($temp['base64_img'][0])) $data['avatar'] = $temp['base64_img'][0];
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
