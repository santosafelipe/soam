<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrutor extends Model
{
    use HasFactory;

    protected $table = 'instrutores';

    protected $fillable = [
        'usuario_id', 'especialidade'
    ];

    // Relacionamento 1:1 - Cada instrutor pertence a um usuário
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    // Relacionamento 1:N - Um instrutor pode ministrar várias aulas
    public function aulas()
    {
        return $this->hasMany(Aula::class, 'instrutor_id');
    }
}
