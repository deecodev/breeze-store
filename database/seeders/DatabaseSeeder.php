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

        collect([
            ['name' => 'All', 'slug' => 'all'],
            ['name' => 'Man', 'slug' => 'man'],
            ['name' => 'Women', 'slug' => 'women'],
            ['name' => 'Kids', 'slug' => 'kids'],
        ])->each(fn($category) => Models\Category::create($category));

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

        Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
        ]);

        Models\User::factory(2)->create();

        Models\Store::factory(5)->hasProducts(20)->create();
    }
}
