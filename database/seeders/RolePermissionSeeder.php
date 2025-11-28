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
     */
    public function run(): void
    {
        // Create permissions if they don't exist
        $permissions = [
            'lihat dashboard',
            'kelola users',
            'kelola roles',
            'kelola content',
            'lihat laporan',
            'kelola pengaturan',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles if they don't exist
        $superAdminRole = Role::firstOrCreate(['name' => 'super-admin']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $editorRole = Role::firstOrCreate(['name' => 'editor']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Assign permissions to roles
        $superAdminRole->syncPermissions($permissions);
        $adminRole->syncPermissions(['view dashboard', 'manage users', 'manage content', 'view reports']);
        $editorRole->syncPermissions(['view dashboard', 'manage content']);
        $userRole->syncPermissions(['view dashboard']);
    }
}
