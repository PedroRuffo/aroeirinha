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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('data');
            $table->string('tipo');
            $table->string('status')->default('Pendente');
            $table->foreignId('Usuario_ID')->constrained('usuarios')->onDelete('cascade');
            $table->foreignID('Endereco_ID')->constrained( 'Endereco')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
