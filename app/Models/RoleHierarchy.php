<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RoleHierarchy
 *
 * @property int $id
 * @property int $role_id
 * @property int $hierarchy
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHierarchy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHierarchy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHierarchy query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHierarchy whereHierarchy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHierarchy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleHierarchy whereRoleId($value)
 * @mixin \Eloquent
 */
class RoleHierarchy extends Model
{
    protected $table = 'role_hierarchy';
    public $timestamps = false;
    
}
