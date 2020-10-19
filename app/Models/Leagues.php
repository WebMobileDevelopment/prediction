<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leagues extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $table = 'leagues';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'game_id', 'name', 'short_name', 'description'
    ];
    // protected $with = ['teams', 'matchs'];
    /**
     * Get the Game that owns the league.
     */
    public function game()
    {
        return $this->belongsTo('App\Models\Games', 'game_id')->withTrashed();
    }

    /**
     * Get the Teams that contained to League.
     */
    public function teams()
    {
        return $this->hasMany('App\Models\LeagueTeams', 'league_id', 'id')->withTrashed();
    }
    /**
     * Get the Teams that contained to League.
     */
    public function matchs()
    {
        return $this->hasMany('App\Models\Matchs', 'league_id', 'id')->withTrashed();
    }
}
