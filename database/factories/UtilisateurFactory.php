<?php

namespace Database\Factories;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilisateur>
 */
class UtilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Utilisateur::class;
    
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),

            'prenom' => $this->faker->name(),
        ];
    }
}
