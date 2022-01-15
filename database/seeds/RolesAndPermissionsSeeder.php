<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissionsConfig = isDemo() ? 'app_list_roles_demo' : 'app_list_roles';
    
        $permissions = call_user_func_array('array_merge', array_values( config('app_list_permissions') ) );
        
        $quards = ['web'];
        
        foreach ($quards as $quard):
            // Create permissions
            foreach($permissions as $permisson):
                Permission::findOrCreate($permisson, $quard);
            endforeach;
        endforeach;

        $quard = "web";
        
        $role = Role::findOrCreate('super_admin', $quard);
        $role->syncPermissions($permissions);

        $roles = config( $permissionsConfig . '.roles');

        foreach($roles as $role_name => $role_permissions){
            $role = Role::findOrCreate($this->roleName($role_name), "web");
            if(count($role_permissions)){
                $role->syncPermissions($role_permissions);
            }
        }
    }

    public function roleName($role)
    {
        return str_replace(' ', '_', mb_strtolower($role));
    }
}
