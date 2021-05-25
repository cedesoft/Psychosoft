<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResponseController as ResponseController;
use Illuminate\Http\Request;
use App\Models\ExpedienteMedico;
use Illuminate\Support\Facades\Validator;
use App\Models\Paciente;

class ExpedientApiController extends ResponseController
{
    public function show($id): \Illuminate\Http\JsonResponse
    {
        $fechas = [];

        $paciente = Paciente::find($id);
        if (is_null($paciente)) {
            return $this->sendError('Patient not found');
        }

        $expedients = $paciente->expediente;

        foreach ($expedients as $exp) {
            array_push($fechas, $exp->created_at);
        }

        //$size = sizeof($this->fechas) - 1;
        //$fecha = $this->fechas[$size];
        //$this->fecha =  strftime("%A %d de %B del %Y", strtotime(date_format($fecha, "l jS F Y")));

        $expedient = $expedients[sizeof($expedients) - 1]; //Ultimo expediente


        return $this->sendResponse($expedient->toArray(), 'Expedient retrieved');
    }

    public function update(Request $request): \Illuminate\Http\JsonResponse
    {
        $input = $request->all();
        $expedient = ExpedienteMedico::find($input['id']);

        $validator = Validator::make($input, [
            'motivo_consulta'=> 'required',
            'problema_actual'=> 'required',
            'crono_sintomatologia'=> 'required',
            'trata_previos'=> 'required',
            'diagnostico'=> 'required',
            'org_economica'=> 'required',
            'org_recreativa'=> 'required',
            'org_personal'=> 'required',
            'hist_familiar'=> 'required',
            'hist_laboral'=> 'required',
            'rela_senti_sexual'=> 'required',
            'rela_interpersonales'=> 'required',
            'rela_intrapersonales'=> 'required',
            'autoestima'=> 'required',
            'autosatisfacciones'=> 'required',
            'idealizaciones'=> 'required',
            'obs_generales'=> 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $expedient->motivo_consulta = $input['motivo_consulta'];
        $expedient->problema_actual = $input['problema_actual'];
        $expedient->crono_sintomatologia = $input['crono_sintomatologia'];
        $expedient->trata_previos = $input['trata_previos'];
        $expedient->diagnostico = $input['diagnostico'];
        $expedient->org_economica = $input['org_economica'];
        $expedient->org_recreativa = $input['org_recreativa'];
        $expedient->org_personal = $input['org_personal'];
        $expedient->hist_familiar = $input['hist_familiar'];
        $expedient->hist_laboral = $input['hist_laboral'];
        $expedient->rela_senti_sexual = $input['rela_senti_sexual'];
        $expedient->rela_interpersonales = $input['rela_interpersonales'];
        $expedient->rela_intrapersonales = $input['rela_intrapersonales'];
        $expedient->autoestima = $input['autoestima'];
        $expedient->autosatisfacciones = $input['autosatisfacciones'];
        $expedient->idealizaciones = $input['idealizaciones'];
        $expedient->obs_generales = $input['obs_generales'];
        $expedient->save();
        return $this->sendResponse($expedient->toArray(), 'Expedient updated');
    }
    /*
    public function destroy(Evento $expedient): \Illuminate\Http\JsonResponse
    {
        $expedient->delete();
        return $this->sendResponse($expedient->toArray(), 'expedient removed');
    } */
}
