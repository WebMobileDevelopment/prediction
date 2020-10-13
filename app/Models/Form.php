<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Form
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $table_name
 * @property int $read
 * @property int $edit
 * @property int $add
 * @property int $delete
 * @property int $pagination
 * @method static \Illuminate\Database\Eloquent\Builder|Form newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Form newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Form query()
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereEdit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form wherePagination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Form whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Form extends Model
{
    protected $table = 'form';

    /**
     * Get the model that owns the Form.
     */
    public function model()
    {
        return $this->belongsTo('App\Models\Models', 'model_id');
    }
}
