<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presenca extends Model
{
    use HasFactory;

    protected $table = 'presencas';

    protected $fillable = [
        'aluno_id', 'data_hora'
    ];

    // Relacionamento 1:1 - Cada presença pertence a um aluno
    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
}
