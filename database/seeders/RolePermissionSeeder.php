<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create modis & megumi role
        $admin = Role::create(['name' => 'admin']);
        $teacher = Role::create(['name' => 'teacher']);
        $student = Role::create(['name' => 'student']);

        // create permission
        $dashboardPermission = Permission::create(['name' => 'dashboard']);

        // give permission to modis role
        $admin->givePermissionTo([
            $dashboardPermission,
        ]);

        $teacher->givePermissionTo([
            $dashboardPermission,
        ]);

        $student->givePermissionTo([
            $dashboardPermission,
        ]);
    }
}