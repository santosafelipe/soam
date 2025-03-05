<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Aluno;

class AlunoFactory extends Factory
{
    protected $model = Aluno::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'sexo' => $this->faker->randomElement(['Masculino', 'Feminino']),
            'data_nascimento' => $this->faker->date(),
            'cpf' => $this->faker->unique()->cpf(false),
            'email' => $this->faker->unique()->safeEmail,
            'telefone' => $this->faker->phoneNumber,
            'cep' => $this->faker->postcode,
            'endereco' => $this->faker->address,
        ];
    }
}
