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
        Schema::create('tb_baguette', function (Blueprint $table) {
            $table->increments('idBaguette');
            $table->string('nombre', 250)->nullable();
            $table->string('descripcion', 250)->nullable();
            $table->string('ingredientes', 250)->nullable();
            $table->string('precio', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_baguette');
    }
};
