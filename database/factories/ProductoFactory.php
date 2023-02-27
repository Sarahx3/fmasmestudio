<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => 'Nuevo Producto',
            'concepto' => $this->faker->sentence(),
            'descripcion' => $this->faker->sentence(),
            'servicio' => $this->faker->randomElement(['F + M Estudio', 'Librettura', 'Concrettura']),
            'precio' => 99.99
        ];
    }
}
