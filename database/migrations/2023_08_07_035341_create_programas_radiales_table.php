<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas_radiales', function (Blueprint $table) {
            $table->id();
            $table->string('nombrePrograma');
            $table->string('dias');
            $table->string('horario');
            $table->string('integrantes1');
            $table->string('integrantes2')->nullable(); // campo que puede ser null
            $table->string('integrantes3')->nullable(); // campo que puede ser null
            $table->string('imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programas_radiales');
    }
};
