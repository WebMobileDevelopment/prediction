<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = teams::orderBy('view_order')->get();
        return view('dashboard.admin.teams.list')->with(['teams' => $teams]);
    }
    public function create(Request $request)
    {

        $team = $request->all();
        teams::create([
            'name' => $team['name'],
            'active_avatar' => $team['base64_img'][0],
            'inactive_avatar' => $team['base64_img'][1],
        ]);
        return $this->index();
    }
    public function edit(Teams $team)
    {
        return view('dashboard.admin.teams.edit')->with(['team' => $team]);
    }

    public function update(Teams $team, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'name' => $temp['name'],
            'description' => $temp['description'],
            'view_order' => $temp['view_order']
        );
        if (!is_null($temp['base64_img'][0])) $data['active_avatar'] = $temp['base64_img'][0];
        if (!is_null($temp['base64_img'][1])) $data['inactive_avatar'] = $temp['base64_img'][0];
        $team->update($data);
        $request->session()->flash('message', 'team updated successfully!');
        return $this->index();
    }
    public function delete(Teams $team, Request $request)
    {
        $team->delete();
        $request->session()->flash('message', 'team deleted successfully!');
        return $this->index();
    }
}
