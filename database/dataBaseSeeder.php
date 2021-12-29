<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comment;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create 50 user
        $users = User::factory()->count(50)->create();

        // Creat 50 posts and give them random to each users

        $posts = Post::factory()->count(50)->make()
        ->each(function($post) use ($users) {
            $post->user_id = $users->random()->id;
            $post->save();
            });
    }




}

