<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ExpedienteMedico extends Component
{
    public $motivoConsulta, $problemaActual, $sintomatologia, $tratamientosPrev, $diagnostico;
    public $org_economica, $org_recreativa, $org_personal, $histFamiliar, $histLaboral, $relSentSex, $relInterper, $relIntraper, $autoestima, $autosatisfacciones, $idealizaciones, $obsGenerales;

    protected $rules = [
        'motivoConsulta' => 'required',
        'problemaActual' => 'required',
        'sintomatologia' => 'required',
        'tratamientosPrev' => 'required',
        'diagnostico' => 'required',
        'org_economica' => 'required',
        'org_recreativa' => 'required',
        'org_personal' => 'required',
        'histFamiliar' => 'required',
        'histLaboral' => 'required',
        'relSentSex' => 'required',
        'relInterper' => 'required',
        'relIntraper' => 'required',
        'autoestima' => 'required',
        'autosatisfacciones' => 'required',
        'idealizaciones' => 'required',
        'obsGenerales' => 'required'
    ];

    public function submitData()
    {
        $date = date("Y-m-d H:i:s");
        $lastPaciente = DB::table('pacientes')->latest('id')->first();
        //dd("The last id inserted on patients is -> " . $lastPaciente->id);

        $validarDatos = $this->validate();
        DB::table('expedientes_medicos')->insert([
            'motivo_consulta' => $validarDatos['motivoConsulta'],
            'problema_actual' => $validarDatos['problemaActual'],
            'crono_sintomatologia' => $validarDatos['sintomatologia'],
            'trata_previos' => $validarDatos['tratamientosPrev'],
            'diagnostico' => $validarDatos['diagnostico'],
            'org_economica' => $validarDatos['org_economica'],
            'org_recreativa' => $validarDatos['org_recreativa'],
            'org_personal' => $validarDatos['org_personal'],
            'hist_familiar' => $validarDatos['histFamiliar'],
            'hist_laboral' => $validarDatos['histLaboral'],
            'rela_senti_sexual' => $validarDatos['relSentSex'],
            'rela_interpersonales' => $validarDatos['relInterper'],
            'rela_intrapersonales' => $validarDatos['relIntraper'],
            'autoestima' => $validarDatos['autoestima'],
            'autosatisfacciones' => $validarDatos['autosatisfacciones'],
            'idealizaciones' => $validarDatos['idealizaciones'],
            'obs_generales' => $validarDatos['obsGenerales'],
            'paciente_id' => $lastPaciente->id,
            'created_at' => $date
        ]);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.expediente-medico');
    }
}
