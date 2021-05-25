<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResponseController as ResponseController;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientController extends ResponseController
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $events = Paciente::all();
        return $this->sendResponse($events->toArray(), 'Patients retrieved');
    }

    public function show($id): \Illuminate\Http\JsonResponse
    {
        $paciente = Paciente::find($id);
        if (is_null($paciente)) {
            return $this->sendError('Book not found');
        }
        //return $this->sendResponse($paciente->expediente->toArray(), 'Book retrieved');
        return $this->sendResponse($paciente->toArray(), 'Patient retrieved');
    }

    public function update(Request $request): \Illuminate\Http\JsonResponse
    {
        $input = $request->all();
        $paciente = Paciente::find($input['id']);

        $validator = Validator::make($input, [
            'nombre' => 'required',
            'apellidos' => 'required',
            'edad' => 'required',
            'domicilio' => 'required',
            'fecha_nacimiento' => 'required',
            'telefono_correo' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $paciente->nombre = $input['nombre'];
        $paciente->apellidos = $input['apellidos'];
        $paciente->edad = $input['edad'];
        $paciente->domicilio = $input['domicilio'];
        $paciente->fecha_nacimiento = $input['fecha_nacimiento'];
        $paciente->telefono_correo = $input['telefono_correo'];
        $paciente->save();
        return $this->sendResponse($paciente->toArray(), 'Patient updated');
    }

    public function destroy(Paciente $paciente): \Illuminate\Http\JsonResponse
    {
        $paciente->delete();
        return $this->sendResponse($paciente->toArray(), 'Patient removed');
    }
}
