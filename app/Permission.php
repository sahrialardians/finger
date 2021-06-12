<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    protected $fillable = ['name', 'guard_name'];

    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',

            'view_opds',
            'add_opds',
            'edit_opds',
            'delete_opds',
            
            'view_positions',
            'add_positions',
            'edit_positions',
            'delete_positions',
        ];
    }
}
