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
        Schema::create('tb_pedidos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idPedidos');
            $table->string('alimento', 250)->nullable();
            $table->string('especificaciones', 250)->nullable();
            $table->string('usuario', 250)->nullable();
            $table->string('total', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pedidos');
    }
};
