<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresencaSeeder extends Seeder
{
    /**
     * Executa o seeder para inserir presenças de alunos na tabela "presencas".
     *
     * @return void
     */
    public function run()
    {
        DB::table('presencas')->insert([
            ['aluno_id' => 1, 'data' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['aluno_id' => 2, 'data' => now(), 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
