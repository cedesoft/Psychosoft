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
        Schema::create('expedientes_medicos', function (Blueprint $table) {
            $table->id();
            $table->text('motivo_consulta');
            $table->text('problema_actual');
            $table->text('crono_sintomatologia');
            $table->text('trata_previos');
            $table->text('diagnostico');
            $table->text('org_economica');
            $table->text('org_recreativa');
            $table->text('org_personal');
            $table->text('hist_familiar');
            $table->text('hist_laboral');
            $table->text('rela_senti_sexual');
            $table->text('rela_interpersonales');
            $table->text('rela_intrapersonales');
            $table->text('autoestima');
            $table->text('autosatisfacciones');/* aGREGAR AL FORMULARIO DE EXPEDIENTE */
            $table->text('idealizaciones');/* aGREGAR AL FORMULARIO DE EXPEDIENTE */
            $table->text('obs_generales');
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
