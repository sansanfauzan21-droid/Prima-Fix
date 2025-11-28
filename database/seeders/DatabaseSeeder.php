<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role; // Import Role untuk memanggil role 'super-admin'

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // PASTIKAN RolePermissionSeeder dipanggil PERTAMA kali
        $this->call(RolePermissionSeeder::class); 

        // 1. Buat User Super Admin
        $superAdminUser = User::create([
            'name' => 'Super Admin',
            'email' => 'admin123@admin.com', // USN Anda
            'password' => Hash::make('admin123'), // PW Anda
        ]);

        // 2. Tetapkan Role Super Admin ke User
        // Ambil objek Role yang sudah dibuat oleh RolePermissionSeeder
        $role = Role::where('name', 'super-admin')->first();
        
        // Tetapkan Role ke user yang baru dibuat
        if ($role) {
            $superAdminUser->assignRole($role);
        }

        // ---
        
        // Panggilan Seeder lainnya
        $this->call([
            // HomeContentSeeder::class,
            // SbuImageSeeder::class,
        ]);
    }
}