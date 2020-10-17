<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Teams;
use App\Models\Players;
use Illuminate\Http\Request;
use Carbon;

class PlayersController extends Controller
{
    public function index()
    {
        $data['teams'] = Teams::orderBy('game_id')->orderBy('name')->get();
        $data['players'] = Players::orderBy('team_id')->orderBy('name')->get();
        return view('dashboard.admin.players.list')->with($data);
    }
    public function create(Request $request)
    {
        $temp = $request->all();
        Players::create([
            'name' => $temp['name'],
            'team_id' => $temp['team_id'],
            'country' => $temp['country'],
            'nationality' => $temp['nationality'],
            'age' => $temp['age'],
            'description' => $temp['description'],
            'avatar' => $temp['base64_img'][0],
        ]);
        return $this->index();
    }
    public function edit(Players $player)
    {
        $data['player'] = $player;
        $data['teams'] = Teams::orderBy('game_id')->orderBy('name')->get();
        return view('dashboard.admin.players.edit')->with($data);
    }

    public function update(Players $player, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'name' => $temp['name'],
            'team_id' => $temp['team_id'],
            'country' => $temp['country'],
            'nationality' => $temp['nationality'],
            'age' => $temp['age'],
            'description' => $temp['description'],
        );
        if (!is_null($temp['base64_img'][0])) $data['avatar'] = $temp['base64_img'][0];
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
