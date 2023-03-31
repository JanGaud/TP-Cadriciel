<?php

namespace Database\Seeders;

use App\Models\Etudiant;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;


class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Create 10 posts with a random user ID
        for ($i = 0; $i < 10; $i++) {
            $user = User::inRandomOrder()->first();
            Post::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraphs(3, true),
                'user_id' => $user->id,
                'category' => $faker->randomElement(['Sport', 'Nourriture', 'Loisir', 'Spectacle', 'Évennement', 'Cours', 'Autre']),
            ]);
        }
    }
}
