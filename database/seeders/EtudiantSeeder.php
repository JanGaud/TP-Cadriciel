<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Etudiant;
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder
{
    public function run()
    {
        Etudiant::factory()
            ->count(100)
            ->create();
    }
}

