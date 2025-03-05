<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    use HasFactory;

    protected $table = 'notificacoes';

    protected $fillable = [
        'usuario_id', 'mensagem', 'tipo'
    ];

    // Relacionamento 1:1 - Cada notificação pertence a um usuário
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
