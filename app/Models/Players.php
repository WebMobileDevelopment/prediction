<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Players extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'players';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id', 'name','description','avatar'
    ];
    /**
     * Get the Team type that owns the player.
     */
    public function team()
    {
        return $this->belongsTo('App\Models\Teams', 'team_id')->withTrashed();
    }
}
