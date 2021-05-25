<?php

namespace App\Http\Livewire;

use App\Models\Paciente;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use DateTime;
use PhpParser\Node\Stmt\Foreach_;

use function PHPUnit\Framework\isEmpty;

class FormEditExpediente extends Component
{
    public $motivoConsulta, $problemaActual, $sintomatologia, $tratamientosPrev, $diagnostico;
    public $org_economica, $org_recreativa, $org_personal, $histFamiliar, $histLaboral, $relSentSex, $relInterper, $relIntraper, $autoestima, $autosatisfacciones, $idealizaciones, $obsGenerales;

    public $paciente = null;
    public $expediente = null;
    public $idPaciente = null;
    public $opcionExp = 1;
    public $fechas = [];
    public $fecha = null;

    public $auxExped;

    protected $listeners = [
        'Exp_pac_Id' => 'getDataPaciente',
        'opcionExpediente'
    ];

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

    public function getDataPaciente(Paciente $paciente)
    {
        $this->idPaciente = $paciente->id;

        if (sizeof($paciente->expediente) > 0) {
            $expedientes = $paciente->expediente;
            foreach ($expedientes as $exp) {
                array_push($this->fechas, $exp->created_at);
            }

            $size = sizeof($this->fechas) - 1;
            $fecha = $this->fechas[$size];
            $this->fecha =  strftime("%A %d de %B del %Y", strtotime(date_format($fecha, "l jS F Y")));

            $this->expediente = $expedientes[sizeof($expedientes) - 1]; //Ultimo expediente
        }
    }

    public function opcionExpediente($opcion)
    {
        $this->opcionExp = $opcion;
    }

    private function getIdExpediente()
    {
        return $this->expediente->id;
    }

    private function updateExpediente($date)
    {
        if ($this->motivoConsulta != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['motivo_consulta' => $this->motivoConsulta, 'updated_at' => $date]);
        if ($this->problemaActual != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['problema_actual' => $this->problemaActual, 'updated_at' => $date]);
        if ($this->sintomatologia != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['crono_sintomatologia' => $this->sintomatologia, 'updated_at' => $date]);
        if ($this->tratamientosPrev != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['trata_previos' => $this->tratamientosPrev, 'updated_at' => $date]);
        if ($this->diagnostico != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['diagnostico' => $this->diagnostico, 'updated_at' => $date]);
        if ($this->org_economica != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['org_economica' => $this->org_economica, 'updated_at' => $date]);
        if ($this->org_recreativa != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['org_recreativa' => $this->org_recreativa, 'updated_at' => $date]);
        if ($this->org_personal != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['org_personal' => $this->org_personal, 'updated_at' => $date]);
        if ($this->histFamiliar != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['hist_familiar' => $this->histFamiliar, 'updated_at' => $date]);
        if ($this->histLaboral != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['hist_laboral' => $this->histLaboral, 'updated_at' => $date]);
        if ($this->relSentSex != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['rela_senti_sexual' => $this->relSentSex, 'updated_at' => $date]);
        if ($this->relInterper != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['rela_interpersonales' => $this->relInterper, 'updated_at' => $date]);
        if ($this->relIntraper != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['rela_intrapersonales' => $this->relIntraper, 'updated_at' => $date]);
        if ($this->autoestima != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['autoestima' => $this->autoestima, 'updated_at' => $date]);
        if ($this->autosatisfacciones != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['autosatisfacciones' => $this->motivoConsulta, 'updated_at' => $date]);
        if ($this->idealizaciones != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['idealizaciones' => $this->motivoConsulta, 'updated_at' => $date]);
        if ($this->obsGenerales != null)
            DB::table('expedientes_medicos')->where('id', $this->getIdExpediente())->update(['obs_generales' => $this->motivoConsulta, 'updated_at' => $date]);

        $this->emit('refreshTable');
    }

    private function saveExpediente($date)
    {
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
            'paciente_id' =>  $this->idPaciente,
            'created_at' => $date
        ]);
        $this->emit('refreshTable');
    }

    public function submitData()
    {
        $date = date("Y-m-d H:i:s");
        if ($this->opcionExp == 1) { //Agregar Expediente
            $this->saveExpediente($date);
        } else {
            $this->updateExpediente($date);
        }

        $this->dispatchBrowserEvent('closeModal2');
        $this->emit('saveDataExp');
        $this->reset();
    }

    public function render()
    {
        if ($this->opcionExp == 1) {
            $this->expediente = 1;
            return view('livewire.form-edit-expediente', [
                'expedientes' => $this->expediente
            ]);
        } else {
            return view('livewire.form-edit-expediente', [
                'expedientes' => $this->expediente
            ]);
        }
    }
}
