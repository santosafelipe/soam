<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;

    protected $table = 'planos';

    protected $fillable = [
        'nome', 'valor', 'duracao'
    ];

    // Relacionamento 1:N - Um plano pode ter vários alunos cadastrados nele
    public function alunos()
    {
        return $this->hasMany(Aluno::class, 'plano_id');
    }
}
