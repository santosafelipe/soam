<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

    protected $table = 'pagamentos';

    protected $fillable = [
        'aluno_id', 'valor', 'data_pagamento', 'status'
    ];

    // Relacionamento 1:1 - Cada pagamento pertence a um aluno
    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
}
