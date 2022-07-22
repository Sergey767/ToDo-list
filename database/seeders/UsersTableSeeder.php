<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@example.com'
        ]);

        \App\Models\User::factory()->count(50)->create();

        //factory(User::class, 50)->create();
        // factory(User::class)->create([
        //     'name' => 'Test User',
        //     'email' => 'user@example.com'
        // ]);

        // factory(User::class, 50)->create();
    }
}
