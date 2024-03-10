<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\notificacao>
 */
class NotificacaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vc_assunto'=>$this->faker->text,
            'lt_descricao'=>$this->faker->text,
            'it_id_categoriaNotificacao'=>$this->faker->number


        ];
    }
}
