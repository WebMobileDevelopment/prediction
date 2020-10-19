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
        'match_id', 'question'
    ];
    /**
     * Get the match that owns the question.
     */
    public function match()
    {
        return $this->belongsTo('App\Models\Match', 'match_id')->withTrashed();
    }
}
