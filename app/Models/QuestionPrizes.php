<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionPrizes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'question_prizes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id', 'user_id'
    ];
    /**
     * Get the question that owns the answer.
     */
    public function question()
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
