<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questions extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'questions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_id', 'question','player1_id','player2_id','prize'
    ];
    /**
     * Get the match that owns the question.
     */
    public function match()
    {
        return $this->belongsTo('App\Models\Match', 'match_id')->withTrashed();
    }
    /**
     * Get the match that owns the question.
     */
    public function player1()
    {
        return $this->belongsTo('App\Models\Players', 'player1_id')->withTrashed();
    }
    /**
     * Get the match that owns the question.
     */
    public function player2()
    {
        return $this->belongsTo('App\Models\Players', 'player2_id')->withTrashed();
    }
}
