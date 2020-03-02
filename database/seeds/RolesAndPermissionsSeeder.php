<?php

use Illuminate\Database\Seeder;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;


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
        app()[PermissionRegistrar::class]->forgetCachedPermissions();


        $adminPermissions = Permission::query()->where('guard_name', 'admin')->get();

        // Insert Roles for the Project...
        $this->adminGuardRoles();
        $this->webGuardRoles();
        //$this->insertPermission();

    }


    /**
     * Method to insert Roles for the web Guard...
     *
     * @return mixed
     */
    public function webGuardRoles() {

        $roles_array = [
            [
                'guard_name' => 'web',
                'name' => 'customer',
                'description' => 'Role for the customer'
            ]
        ];

        return Role::query()->insert($roles_array);
    }


    /**
     * Method to insert Roles for the Admin Guard...
     */
    public function adminGuardRoles (): bool
    {

        $roles_array = [
            [
                'guard_name' => 'admin',
                'name' => 'admin',
                'description' => 'Role for the admin'
            ]
        ];

        return Role::query()->insert($roles_array);

    }
}
