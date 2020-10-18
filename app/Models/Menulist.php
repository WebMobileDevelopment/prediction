<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Menulist
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Menulist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menulist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menulist query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menulist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menulist whereName($value)
 * @mixin \Eloquent
 */
class Menulist extends Model
{
    protected $table = 'menulist';
    public $timestamps = false; 
}
