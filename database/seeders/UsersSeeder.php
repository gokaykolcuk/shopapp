<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\PermissionRegistrar;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        // Spatie cache temizliği (rol/permission cache)
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        // 1) Örnek admin + super-admin (istersen kaldır)
        $superAdmin = User::firstOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
            ]
        );
        $superAdmin->assignRole('super-admin');

        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );
        $admin->assignRole('admin');

        // 2) 10 adet normal user
        $users = User::factory()
            ->count(10)
            ->create();

        foreach ($users as $u) {
            $u->assignRole('user');
        }
    }
}