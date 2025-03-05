<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    // Define o nome da tabela correspondente no banco de dados
    protected $table = 'usuarios';

    // Define os campos que podem ser preenchidos em massa (mass assignment)
    protected $fillable = [
        'nome', 'email', 'senha', 'cpf', 'telefone', 'tipo_usuario'
    ];

    // Esconde campos sensíveis quando o modelo for convertido em JSON ou Array
    protected $hidden = [
        'senha',
    ];

    // Relacionamento 1:1 - Um usuário pode ser um aluno
    public function aluno()
    {
        return $this->hasOne(Aluno::class, 'usuario_id');
    }

    // Relacionamento 1:1 - Um usuário pode ser um instrutor
    public function instrutor()
    {
        return $this->hasOne(Instrutor::class, 'usuario_id');
    }
}
