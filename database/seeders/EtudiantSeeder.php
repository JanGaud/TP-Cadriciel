<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed records into child table
        Etudiant::factory()->count(10)->create()->each(function ($etudiant) {
            $user = User::inRandomOrder()->first();
            $etudiant->user_id = $user->id;
            $etudiant->save();
        });
    }
}
