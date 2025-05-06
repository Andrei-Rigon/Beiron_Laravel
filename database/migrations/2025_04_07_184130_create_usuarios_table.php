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
            $table->string('LOGIN',255);
            $table->string('EMAIL',255);
            $table->string('SENHA',255);
            $table->timestamp('DATAHORACADASTRO')->useCurrent();
            $table->string('ATIVO',3)->default('SIM');
            $table->double('NIVEL');
            $table->double('XP');
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