<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $categories=Category::factory()->count(5)->create();
        $users=User::factory()
            ->count(5)->create();
        foreach($users as $user){
        $posts = Post::factory()
            ->count(5)
            ->for($user)
            ->create();
        }
        foreach($posts as $post){
        $post->categories()->attach($categories->random()->id);
         }

    }

}
