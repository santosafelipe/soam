<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $table = 'aulas';

    protected $fillable = [
        'instrutor_id', 'data_hora', 'descricao'
    ];

    // Relacionamento 1:1 - Cada aula tem um instrutor responsável
    public function instrutor()
    {
        return $this->belongsTo(Instrutor::class, 'instrutor_id');
    }
}
