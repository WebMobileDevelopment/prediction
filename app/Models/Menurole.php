<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Menurole
 *
 * @property int $id
 * @property string $role_name
 * @property int $menus_id
 * @method static \Illuminate\Database\Eloquent\Builder|Menurole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menurole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menurole query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menurole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menurole whereMenusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menurole whereRoleName($value)
 * @mixin \Eloquent
 */
class Menurole extends Model
{
    protected $table = 'menu_role';
    public $timestamps = false; 
}
