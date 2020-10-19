<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatchPrizes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'match_prizes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_id', 'user_id', 'prize', 'awarded_at'
    ];
    /**
     * Get the question that owns the answer.
     */
    public function match()
    {
        return $this->belongsTo('App\Models\Matchs', 'match_id')->withTrashed();
    }
    /**
     * Get the user that owns the answer.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Users', 'user_id')->withTrashed();
    }
}
