<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
        $games = Games::orderBy('view_order')->get();
        return view('admin.dashboard.games.list')->with(['games' => $games]);
    }
    public function create(Request $request)
    {
        $game = $request->all();
        Games::create([
            'name' => $game['name'],
            'description' => $game['description'],
            'view_order' => $game['view_order'],
            'menu_icon' => $game['base64_img'],
        ]);
        $request->session()->flash('message', 'New Game type created successfully!');
        return $this->index();
    }
    public function edit(Games $game)
    {
        return view('admin.dashboard.games.edit')->with(['game' => $game]);
    }
    public function update(Games $game, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'name' => $temp['name'],
            'description' => $temp['description'],
            'view_order' => $temp['view_order'],
            'menu_icon' => $temp['base64_img']
        );
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
