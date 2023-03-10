<?php

namespace Database\Factories;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ville>
 */
class VilleFactory extends Factory
{
    protected $model = Ville::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->city(),
        ];
    }
}
