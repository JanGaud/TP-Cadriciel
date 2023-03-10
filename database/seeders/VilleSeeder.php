<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Ville;
use Illuminate\Database\Seeder;

class VilleSeeder extends Seeder
{
    public function run()
    {
        Ville::factory()
            ->count(15)
            ->create();
    }
}