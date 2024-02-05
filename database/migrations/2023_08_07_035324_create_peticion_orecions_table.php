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
        Schema::create('peticion_orecions', function (Blueprint $table) {
            $table->id();
            $table->string('nombrepersona1');
            $table->string('nombrepersona2');
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('peticion',2000);
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
        Schema::dropIfExists('peticion_orecions');
    }
};
