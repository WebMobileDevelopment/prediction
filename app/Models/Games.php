<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Games extends Model
{

    use HasFactory;

    protected $table = 'games';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'menu_icon', 'description', 'view_order',
    ];
    /**
     * Get the User that owns the Notes.
     */
    public function leagues()
    {
        return $this->hasMany('App\Models\Leagues', 'game_id')->withTrashed();
    }
    public function teams()
    {
        return $this->hasMany('App\Models\Teams', 'game_id')->withTrashed();
    }

    /**
     * Get the Status that owns the Notes.
     */
    // public function status()
    // {
    //     return $this->belongsTo('App\Models\Status', 'status_id');
    // }
}
