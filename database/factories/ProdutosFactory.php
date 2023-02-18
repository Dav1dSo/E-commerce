<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $nome = $this->faker->word;

        return [
            'nome' => $nome,
            'nomeId' => Str::slug($nome),
            'imagem' => $this->faker->imageUrl,
            'preco' => $this->faker->randomFloat(1,20,50),
            'descricao' => $this->faker->sentence,
            'estoque' => $this->faker->randomDigit()
        ];
    }
}
