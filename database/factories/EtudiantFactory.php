<?php

namespace Database\Factories;

use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    protected $model = Etudiant::class;

    public function definition()
    {
        // Get a random user from the parent table
        $user = User::inRandomOrder()->first() ?? User::factory()->create();
        
        return [
            'user_id' => $user->id,
            'nom' => $this->faker->name(),
            'adresse' => $this->faker->address(),
            'telephone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'ville_id' => rand(1, 100),
            'anniversary' => $this->faker->dateTimeBetween('-30 years', 'now')->format('Y-m-d'),
        ];
    }
    
}
