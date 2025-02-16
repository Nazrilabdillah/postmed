<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Posts;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\PostChild\Like;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->has(Posts::factory()->count(10))->create();
        Like::factory(3)->recycle(User::factory(5)->create())->recycle(Posts::factory(20)->create())->create();
    }
}
