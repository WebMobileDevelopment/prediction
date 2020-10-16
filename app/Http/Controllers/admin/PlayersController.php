<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Players;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        $players = Players::orderBy('view_order')->get();
        return view('dashboard.admin.players.list')->with(['players' => $players]);
    }
    public function create(Request $request)
    {

        $player = $request->all();
        Players::create([
            'name' => $player['name'],
            'active_avatar' => $player['base64_img'][0],
            'inactive_avatar' => $player['base64_img'][1],
        ]);
        return $this->index();
    }
    public function edit(Players $player)
    {
        return view('dashboard.admin.players.edit')->with(['player' => $player]);
    }

    public function update(Players $player, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'name' => $temp['name'],
            'description' => $temp['description'],
            'view_order' => $temp['view_order']
        );
        if (!is_null($temp['base64_img'][0])) $data['active_avatar'] = $temp['base64_img'][0];
        if (!is_null($temp['base64_img'][1])) $data['inactive_avatar'] = $temp['base64_img'][0];
        $player->update($data);
        $request->session()->flash('message', 'player updated successfully!');
        return $this->index();
    }
    public function delete(Players $player, Request $request)
    {
        $player->delete();
        $request->session()->flash('message', 'player deleted successfully!');
        return $this->index();
    }
}
