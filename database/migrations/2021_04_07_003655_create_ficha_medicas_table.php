<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_medica', function (Blueprint $table) {
            $table->id();
            $table->string('escolaridad');
            $table->string('ocupacion');
            $table->string('estado_civil');
            $table->string('religion');
            $table->string('adicciones');
            $table->string('vive_con');
            $table->unsignedBigInteger('paciente_id')->unique();

            $table->foreign('paciente_id')->references('id')->on('pacientes');
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
        Schema::dropIfExists('ficha_medicas');
    }
}
