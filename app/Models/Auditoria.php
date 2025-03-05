<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    use HasFactory;

    protected $table = 'auditorias';

    protected $fillable = [
        'usuario_id', 'acao', 'detalhes'
    ];

    // Relacionamento 1:1 - Cada auditoria pertence a um usuário
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
