<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanoSeeder extends Seeder
{
    /**
     * Executa o seeder para inserir planos na tabela "planos".
     *
     * @return void
     */
    public function run()
    {
        DB::table('planos')->insert([
            ['nome' => 'Plano Mensal Light', 'valor' => 100.00, 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Plano Mensal Feminino', 'valor' => 90.00, 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Plano Mensal Básico', 'valor' => 120.00, 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Plano Mensal Vip', 'valor' => 150.00, 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Plano Trimestral Básico', 'valor' => 330.00, 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Plano Anual Vip', 'valor' => 1500.00, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
