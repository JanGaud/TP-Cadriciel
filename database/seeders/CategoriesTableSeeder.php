<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'Technologie',
            'description' => 'Articles sur les dernières technologies, les gadgets et les appareils électroniques',
        ]);

        Category::create([
            'title' => 'Nourriture',
            'description' => 'Articles sur la cuisine, les recettes, les restaurants et les aliments',
        ]);

        Category::create([
            'title' => 'Sport',
            'description' => 'Articles sur les sports, les événements sportifs, les équipes et les athlètes',
        ]);

        Category::create([
            'title' => 'Événement',
            'description' => 'Articles sur les événements locaux, nationaux et internationaux, comme les festivals, les concerts et les expositions',
        ]);

        Category::create([
            'title' => 'Spectacle',
            'description' => 'Articles sur les spectacles, les performances et les arts du spectacle, comme le théâtre, la danse et la comédie',
        ]);

        Category::create([
            'title' => 'Alerte',
            'description' => 'Articles sur les alertes de sécurité, les urgences et les événements en temps réel',
        ]);

        Category::create([
            'title' => 'Voyage et Tourisme',
            'description' => 'Articles sur les destinations de voyage, les attractions touristiques, les guides de voyage et les conseils pour les voyageurs',
        ]);

        Category::create([
            'title' => 'Autre',
            'description' => 'Articles sur les sujets divers et variés, si vous ne trouvez pas de catégorie appropriée',
        ]);
    }
}
