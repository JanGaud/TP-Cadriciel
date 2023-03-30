<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    public function run()
    {
        // Seed records into child table
        Etudiant::factory()->count(10)->create()->each(function ($etudiant) {
            // Get a random user from the parent table
            $user = User::inRandomOrder()->first();
            // Associate the user with the current student
            $etudiant->user()->associate($user);
            $etudiant->save();
        });
     
    }    
}

