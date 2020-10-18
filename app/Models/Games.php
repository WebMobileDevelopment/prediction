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
        'name', 'view_order','active_avatar', 'inactive_avatar',
    ];
    /**
     * Get the User that owns the Notes.
     */
    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User', 'users_id')->withTrashed();
    // }

    /**
     * Get the Status that owns the Notes.
     */
    // public function status()
    // {
    //     return $this->belongsTo('App\Models\Status', 'status_id');
    // }
}
