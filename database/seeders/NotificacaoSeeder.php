<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificacaoSeeder extends Seeder
{
    /**
     * Executa o seeder para inserir notificações de exemplo na tabela "notificacoes".
     *
     * @return void
     */
    public function run()
    {
        DB::table('notificacoes')->insert([
            [
                'usuario_id' => 1,
                'mensagem' => 'Seu pagamento vence amanhã!',
                'status' => 'não lida',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'usuario_id' => 2,
                'mensagem' => 'Treino extra disponível neste sábado!',
                'status' => 'não lida',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
