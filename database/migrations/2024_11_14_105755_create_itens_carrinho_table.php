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
    Schema::create('itens_carrinho', function (Blueprint $table) {
        $table->id();
        $table->integer('quantidade');
        $table->foreignId('fk_pedido_id')->constrained('pedidos')->onDelete('cascade');
        $table->foreignId('fk_produtos_id')->constrained('produtos')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_carrinho');
    }
};
