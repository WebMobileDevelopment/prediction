<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Example
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $description
 * @property int $status_id
 * @property-read \App\Models\Status $status
 * @method static \Illuminate\Database\Eloquent\Builder|Example newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Example newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Example query()
 * @method static \Illuminate\Database\Eloquent\Builder|Example whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Example whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Example whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Example whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Example whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Example whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Example extends Model
{
    protected $table = 'example';

    /**
     * Get the Status that owns the Notes.
     */
    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'status_id');
    }
}
