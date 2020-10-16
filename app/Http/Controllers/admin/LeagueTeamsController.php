<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\LeagueTeams;
use Illuminate\Http\Request;

class LeagueTeamsController extends Controller
{
    public function index()
    {
        $leagueTeams = LeagueTeams::orderBy('view_order')->get();
        return view('dashboard.admin.leagueTeams.list')->with(['leagueTeams' => $leagueTeams]);
    }
    public function create(Request $request)
    {

        $leagueTeam = $request->all();
        LeagueTeams::create([
            'name' => $leagueTeam['name'],
            'active_avatar' => $leagueTeam['base64_img'][0],
            'inactive_avatar' => $leagueTeam['base64_img'][1],
        ]);
        return $this->index();
    }
    public function edit(LeagueTeams $leagueTeam)
    {
        return view('dashboard.admin.leagueTeams.edit')->with(['leagueTeam' => $leagueTeam]);
    }

    public function update(LeagueTeams $leagueTeam, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'name' => $temp['name'],
            'description' => $temp['description'],
            'view_order' => $temp['view_order']
        );
        if (!is_null($temp['base64_img'][0])) $data['active_avatar'] = $temp['base64_img'][0];
        if (!is_null($temp['base64_img'][1])) $data['inactive_avatar'] = $temp['base64_img'][0];
        $leagueTeam->update($data);
        $request->session()->flash('message', 'leagueTeam updated successfully!');
        return $this->index();
    }
    public function delete(LeagueTeams $leagueTeam, Request $request)
    {
        $leagueTeam->delete();
        $request->session()->flash('message', 'leagueTeam deleted successfully!');
        return $this->index();
    }
}
