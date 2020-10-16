<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Leagues;
use App\Models\Games;
use Illuminate\Http\Request;

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
            'active_avatar' => $league['base64_img'][0],
            'inactive_avatar' => $league['base64_img'][1],
        ]);
        return $this->index();
    }
    public function edit(Leagues $league)
    {
        return view('dashboard.admin.leagues.edit')->with(['league' => $league]);
    }

    public function update(Leagues $league, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'name' => $temp['name'],
            'description' => $temp['description'],
            'view_order' => $temp['view_order']
        );
        if (!is_null($temp['base64_img'][0])) $data['active_avatar'] = $temp['base64_img'][0];
        if (!is_null($temp['base64_img'][1])) $data['inactive_avatar'] = $temp['base64_img'][0];
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
