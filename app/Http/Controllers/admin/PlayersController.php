<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Games;
use App\Models\Teams;
use App\Models\Players;
use Illuminate\Http\Request;
use Carbon;

class PlayersController extends Controller
{
    public function index()
    {
        $data['teams'] = Teams::orderBy('game_id')->orderBy('name')->get();
        $data['games'] = Games::orderBy('view_order')->get();
        $data['players'] = Players::orderBy('team_id')->orderBy('name')->get();
        return view('admin.dashboard.players.list')->with($data);
    }
    public function create(Request $request)
    {
        $temp = $request->all();
        Players::create([
            'team_id' => $temp['team_id'],
            'name' => $temp['name'],
            'description' => $temp['description'],
            'avatar' => $temp['base64_img'],
        ]);
        $request->session()->flash('message', 'New player created successfully!');
        return $this->index();
    }
    public function edit(Players $player)
    {
        $data['player'] = $player;
        $data['teams'] = Teams::orderBy('game_id')->orderBy('name')->get();
        return view('admin.dashboard.players.edit')->with($data);
    }

    public function update(Players $player, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'team_id' => $temp['team_id'],
            'name' => $temp['name'],
            'description' => $temp['description'],
        );
        if (!is_null($temp['base64_img'])) $data['avatar'] = $temp['base64_img'];
        $player->update($data);
        $request->session()->flash('message', 'Player updated successfully!');
        return $this->index();
    }
    public function delete(Players $player, Request $request)
    {
        $player->delete();
        $request->session()->flash('message', 'Player deleted successfully!');
        return $this->index();
    }
}
