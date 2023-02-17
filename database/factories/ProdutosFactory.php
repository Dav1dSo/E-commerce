<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produtos>
 */
class ProdutosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'imagem' => $this->faker->imageUrl,
            'preco' => $this->faker->randomFloat(1,20,50),
            'descricao' => $this->faker->sentence,
            'estoque' => $this->faker->randomDigit()
        ];
    }
}
