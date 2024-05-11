<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Link::create([
            'url' => 'Item 1',
            'user_id' => 1,
        ]);

        Link::create([
            'url' => 'Item 2',
            'user_id' => 1,
        ]);

        Link::create([
            'url' => 'Item 3',
            'user_id' => 1,
        ]);

        Link::create([
            'url' => 'Item 4',
            'user_id' => 1,
        ]);

        Link::create([
            'url' => 'Item 5',
            'user_id' => 1,
        ]);

        Link::create([
            'url' => 'Item 6',
            'user_id' => 1,
        ]);

        Link::create([
            'url' => 'Item 7',
            'user_id' => 1,
        ]);

        Link::create([
            'url' => 'Item 8',
            'user_id' => 1,
        ]);
    }
}
