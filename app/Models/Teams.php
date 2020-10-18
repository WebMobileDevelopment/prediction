<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;
    protected $table = 'teams';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'game_id', 'country', 'location', 'avatar', 'description'
    ];

    /**
     * Get the Game type that owns the team.
     */
    public function game()
    {
        return $this->belongsTo('App\Models\Games', 'game_id');
    }
}
