<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('telefone')->nullable();
            $table->string('cpf')->unique();
            $table->string('cep')->nullable();
            $table->string('endereco')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->enum('tipo', ['admin', 'gestor', 'instrutor', 'aluno']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
