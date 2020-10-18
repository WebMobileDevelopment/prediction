<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Notes
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $note_type
 * @property string $applies_to_date
 * @property int $users_id
 * @property int $status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Status $status
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Notes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notes query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereAppliesToDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereNoteType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notes whereUsersId($value)
 * @mixin \Eloquent
 */
class Notes extends Model
{

    use HasFactory;

    protected $table = 'notes';

    /**
     * Get the User that owns the Notes.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'users_id')->withTrashed();
    }

    /**
     * Get the Status that owns the Notes.
     */
    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'status_id');
    }
}
