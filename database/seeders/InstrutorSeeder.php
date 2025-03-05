<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrutorSeeder extends Seeder
{
    /**
     * Executa o seeder para inserir instrutores de exemplo na tabela "instrutores".
     *
     * @return void
     */
    public function run()
    {
        DB::table('instrutores')->insert([
            [
                'nome' => 'Carlos Silva',
                'sexo' => 'Masculino',
                'data_nascimento' => '1985-06-15',
                'cpf' => '12345678901',
                'email' => 'carlos@academia.com',
                'telefone' => '11999998888',
                'cep' => '01010100',
                'endereco' => 'Rua Exemplo, 123',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nome' => 'Ana Souza',
                'sexo' => 'Feminino',
                'data_nascimento' => '1990-09-23',
                'cpf' => '10987654321',
                'email' => 'ana@academia.com',
                'telefone' => '11988887777',
                'cep' => '02020200',
                'endereco' => 'Avenida Exemplo, 456',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
