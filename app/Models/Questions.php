<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $table = 'questions';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'match_id', 'question'
    ];
    /**
     * Get the match that owns the question.
     */
    public function match()
    {
        return $this->belongsTo('App\Models\Match', 'match_id');
    }
}
