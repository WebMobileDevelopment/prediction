<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeagueTeams extends Model
{
    use HasFactory;
    protected $table = 'league_teams';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'league_id', 'team_id'
    ];
    protected $with = ['team'];
    /**
     * Get the Game that owns the league.
     */
    public function league()
    {
        return $this->belongsTo('App\Models\Leagues', 'league_id');
    }

    /**
     * Get the Teams that contained to League.
     */
    public function team()
    {
        return $this->belongsTo('App\Models\Teams', 'team_id');
    }
}
