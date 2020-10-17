<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    use HasFactory;
    protected $table = 'matchs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'league_id', 'team1_id', 'team2_id', 'description', 'start_time', 'end_time'
    ];
    protected $with = ['team1', 'team2', 'questions'];
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
    public function team1()
    {
        return $this->belongsTo('App\Models\Teams', 'team1_id');
    }
    /**
     * Get the Teams that contained to League.
     */
    public function team2()
    {
        return $this->belongsTo('App\Models\Teams', 'team2_id');
    }
    /**
     * Get the Teams that contained to League.
     */
    public function questions()
    {
        return $this->hasMany('App\Models\Questions', 'match_id');
    }
}
