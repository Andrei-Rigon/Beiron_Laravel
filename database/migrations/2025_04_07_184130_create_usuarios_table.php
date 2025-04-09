<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('USUARIO',255)->nullable();
            $table->string('LOGIN',255)->nullable();
            $table->string('EMAIL',255)->nullable();
            $table->string('SENHA',255)->nullable();
            $table->timestamp('DATAHORACADASTRO')->nullable();
            $table->string('ATIVO',3)->nullable();
            $table->string('CODPERFIL');
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