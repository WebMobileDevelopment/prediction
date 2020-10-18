<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\FormField
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $type
 * @property int $browse
 * @property int $read
 * @property int $edit
 * @property int $add
 * @property string|null $relation_table
 * @property string|null $relation_column
 * @property int $form_id
 * @property string $column_name
 * @method static \Illuminate\Database\Eloquent\Builder|FormField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FormField query()
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereAdd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereBrowse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereColumnName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereEdit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereFormId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereRelationColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereRelationTable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FormField whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FormField extends Model
{
    protected $table = 'form_field';

}