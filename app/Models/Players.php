<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;
    protected $table = 'players';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id', 'name','country','nationality', 'age','avatar','description'
    ];
    /**
     * Get the Team type that owns the player.
     */
    public function team()
    {
        return $this->belongsTo('App\Models\Teams', 'team_id');
    }
}
