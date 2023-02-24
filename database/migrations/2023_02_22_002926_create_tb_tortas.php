<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('tb_tortas', function (Blueprint $table) {
            $table->increments('idTortas');
            $table->string('nombre', 250)->nullable();
            $table->string('descripcion', 250)->nullable();
            $table->string('ingredientes', 250)->nullable();
            $table->string('precio', 250)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_tortas');
    }
};
