<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Leagues extends Model
{

    use HasFactory;

    protected $table = 'leagues';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'game_id', 'name','avatar', 'description','location','start_time','end_time'
    ];
    /**
     * Get the User that owns the Notes.
     */
    public function game()
    {
        return $this->belongsTo('App\Models\Games', 'game_id')->withTrashed();
    }

    /**
     * Get the Status that owns the Notes.
     */
    // public function status()
    // {
    //     return $this->belongsTo('App\Models\Status', 'status_id');
    // }
}
