<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
        $games = Games::orderBy('view_order')->get();
        return view('dashboard.admin.games.list')->with(['games' => $games]);
    }
    public function create(Request $request)
    {

        $game = $request->all();
        Games::create([
            'name' => $game['name'],
            'active_avatar' => $game['base64_img'][0],
            'inactive_avatar' => $game['base64_img'][1],
        ]);
        return $this->index();
    }
    public function edit(Games $game)
    {
        return view('dashboard.admin.games.edit')->with(['game' => $game]);
    }

    public function update(Games $game, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'name' => $temp['name'],
            'description' => $temp['description'],
            'view_order' => $temp['view_order']
        );
        if (!is_null($temp['base64_img'][0])) $data['active_avatar'] = $temp['base64_img'][0];
        if (!is_null($temp['base64_img'][1])) $data['inactive_avatar'] = $temp['base64_img'][0];
        $game->update($data);
        $request->session()->flash('message', 'Game updated successfully!');
        return $this->index();
    }
    public function delete(Games $game, Request $request)
    {
        $game->delete();
        $request->session()->flash('message', 'Game deleted successfully!');
        return $this->index();
    }
}
