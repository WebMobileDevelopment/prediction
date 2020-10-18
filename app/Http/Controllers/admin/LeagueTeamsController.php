<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Games;
use App\Models\Leagues;
use App\Models\Teams;
use App\Models\leagueTeams;
use Illuminate\Http\Request;
use Carbon;

class LeagueTeamsController extends Controller
{
    public function index($league_id)
    {
        $league = Leagues::find($league_id);
        $data['league'] = $league;
        $data['teams'] = Teams::where('game_id', $league->game_id)->orderBy('name')->get();
        return view('admin.dashboard.leagueTeams.list')->with($data);
    }

    public function create($league_id, Request $request)
    {
        $temp = $request->all();
        leagueTeams::create([
            'league_id' => $league_id,
            'team_id' => $temp['team_id'],
        ]);
        $request->session()->flash('message', 'New team added to league successfully!');
        return $this->index($league_id);
    }

    public function delete($league_id, leagueTeams $leagueTeam, Request $request)
    {
        $leagueTeam->delete();
        $request->session()->flash('message', 'Team deleted from league successfully!');
        return $this->index($league_id);
    }
}
