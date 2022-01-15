<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    // Permissions that must be assigned maunally
    private static $disallowedPermissions = [
        'assign_role',
        'create_role',
        'edit_role',
        'delete_role',
        'view_role',
        'permanently_delete_role',
        'assign_permissions',
        'manage_acl',
        'upload_module',
        'list_modules',
        'manage_modules',
        'update_application'
    ];

    public static function disallowed($permission)
    {
        return in_array($permission, self::$disallowedPermissions);
    }

}
