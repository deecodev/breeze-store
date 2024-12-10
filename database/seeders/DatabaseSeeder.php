<?php

namespace Database\Seeders;

use App\Models;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        collect([
            ['name' => 'admin'],
            ['name' => 'partner']
        ])->each(fn($role) => Models\Role::create($role));

        // Create users with roles
        $user_admin = Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);
        $user_admin->roles()->save(Models\Role::query()->where('name', 'admin')->firstOrFail());

        $user_partner = Models\User::factory()->create([
            'name' => 'Partner',
            'email' => 'partner@example.com',
        ]);
        $user_partner->roles()->save(Models\Role::query()->where('name', 'partner')->firstOrFail());
    }
}
