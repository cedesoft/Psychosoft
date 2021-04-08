<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedienteMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediente_medicos', function (Blueprint $table) {
            $table->id();
            $table->string('motivo_consulta');
            $table->string('problema_actual');
            $table->string('crono_sintomatologia');
            $table->string('trata_previos');
            $table->string('diagnostico');
            $table->string('hist_familiar');
            $table->string('hist_laboral');
            $table->string('org_personal');
            $table->string('rela_senti_sexual');
            $table->string('autoestima');
            $table->string('autosatisfacciones');/* aGREGAR AL FORMULARIO DE EXPEDIENTE */
            $table->string('idealizaciones');/* aGREGAR AL FORMULARIO DE EXPEDIENTE */
            $table->string('obs_generales');
            $table->dateTime('fecha');
            $table->unsignedBigInteger('paciente_id');

            $table->foreign('paciente_id')
                ->references('id')
                ->on('pacientes');
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
        Schema::dropIfExists('expediente_medicos');
    }
}
