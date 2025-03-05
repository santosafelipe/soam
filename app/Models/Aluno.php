<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';

    protected $fillable = [
        'usuario_id', 'data_nascimento', 'endereco', 'cep', 'plano_id'
    ];

    // Relacionamento 1:1 - Cada aluno pertence a um usuário
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    // Relacionamento 1:N - Um aluno pode ter vários pagamentos
    public function pagamentos()
    {
        return $this->hasMany(Pagamento::class, 'aluno_id');
    }

    // Relacionamento 1:N - Um aluno pode ter várias presenças registradas
    public function presencas()
    {
        return $this->hasMany(Presenca::class, 'aluno_id');
    }

    // Relacionamento 1:1 - Cada aluno tem um plano
    public function plano()
    {
        return $this->belongsTo(Plano::class, 'plano_id');
    }
}
