<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Games;
use App\Models\Leagues;
use App\Models\Teams;
use App\Models\LeagueTeams;
use App\Models\Matchs;
use Illuminate\Http\Request;
use Carbon;

class MatchsController extends Controller
{
    public function index($league_id)
    {
        $league = Leagues::find($league_id);
        $data['league'] = $league;
        $data['league_teams'] = LeagueTeams::where('league_id', $league->id)->orderBy('team_id')->get();
        return view('admin.dashboard.matchs.list')->with($data);
    }
    public function create($league_id, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'name' => $temp['name'],
            'league_id' => $league_id,
            'team1_id' => $temp['team1_id'],
            'team2_id' => $temp['team2_id'],
            'description' => $temp['description'],
            'start_time' => Carbon::create($temp['start_time']),
            'end_time' => Carbon::create($temp['end_time']),
        );

        if (!is_null($temp['start_time'])) {
            $data['start_time'] = Carbon::create($temp['start_time']);
            $data['end_time'] = Carbon::create($temp['end_time']);
        }
        Matchs::create($data);
        $request->session()->flash('message', 'New match created successfully!');
        return $this->index($league_id);
    }
    public function edit(Matchs $match)
    {
        $data['match'] = $match;
        $data['league_teams'] = LeagueTeams::where('league_id', $match->league_id)->orderBy('team_id')->get();
        return view('admin.dashboard.matchs.edit')->with($data);
    }

    public function update(Matchs $match, Request $request)
    {
        $temp = $request->all();
        $data = array(
            'name' => $temp['name'],
            'league_id' => $match->league_id,
            'team1_id' => $temp['team1_id'],
            'team2_id' => $temp['team2_id'],
            'description' => $temp['description'],
            'start_time' => Carbon::create($temp['start_time']),
            'end_time' => Carbon::create($temp['end_time']),
        );
        $match->update($data);
        $request->session()->flash('message', 'Match updated successfully!');
        return $this->index($match->league_id);
    }

    public function delete(Matchs $match, Request $request)
    {
        $match->delete();
        $request->session()->flash('message', 'Match deleted successfully!');
        return $this->index($match->league_id);
    }
}
