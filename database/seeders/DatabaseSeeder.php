<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::query()->truncate();
        Post::query()->truncate();
        Category::query()->truncate();

        User::factory(10)->create();
        Post::factory(10)->create();

        Category::query()->create([
            'category_name' => 'family'
        ]);

        Category::query()->create([
            'category_name' => 'personal'
        ]);

        Category::query()->create([
            'category_name' => 'work'
        ]);


    }
}
