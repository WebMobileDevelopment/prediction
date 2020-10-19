<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answers extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'answers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id', 'user_id','player1_id','player2_id','award','description'
    ];
    /**
     * Get the question that owns the answer.
     */
    public function question()
    {
        return $this->belongsTo('App\Models\Questions', 'question_id')->withTrashed();
    }
    /**
     * Get the user that owns the answer.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Users', 'user_id')->withTrashed();
    }
    /**
     * Get the user that owns the answer.
     */
    public function player1()
    {
        return $this->belongsTo('App\Models\Players', 'player1_id')->withTrashed();
    }
    /**
     * Get the user that owns the answer.
     */
    public function player2()
    {
        return $this->belongsTo('App\Models\Players', 'player2_id')->withTrashed();
    }
}
