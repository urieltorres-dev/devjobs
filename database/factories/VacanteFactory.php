<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Salario;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacante>
 */
class VacanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->jobTitle(),
            'salario_id' => Salario::inRandomOrder()->first()->id,
            'categoria_id' => Categoria::inRandomOrder()->first()->id,
            'empresa' => $this->faker->company(),
            'ultimo_dia' => $this->faker->dateTimeBetween('now', '+2 months'),
            'descripcion' => $this->faker->paragraph(5),
            'imagen' => 'vacante' . rand(1, 5) . '.jpg',
            'publicado' => 1,
            'user_id' => User::inRandomOrder()->where('rol', 2)->first()->id,
        ];
    }
}
