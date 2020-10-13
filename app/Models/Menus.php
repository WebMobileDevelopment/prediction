<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Menus
 *
 * @property int $id
 * @property string $name
 * @property string|null $href
 * @property string|null $icon
 * @property string $slug
 * @property int|null $parent_id
 * @property int $menu_id
 * @property int $sequence
 * @method static \Illuminate\Database\Eloquent\Builder|Menus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menus query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereHref($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereSequence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menus whereSlug($value)
 * @mixin \Eloquent
 */
class Menus extends Model
{
    protected $table = 'menus';
    public $timestamps = false; 
}
