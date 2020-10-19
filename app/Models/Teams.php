<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teams extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'teams';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'game_id', 'name', 'short_name', 'description', 'avatar'
    ];

    /**
     * Get the Game type that owns the team.
     */
    public function game()
    {
        return $this->belongsTo('App\Models\Games', 'game_id')->withTrashed();
    }
}
