<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Paciente;

class FormEditFichaPaciente extends Component
{

    public $nombre, $apellidos, $domicilio, $nacimiento, $edad;
    public $telefono, $escolaridad, $ocupacion, $estado_civil, $religion, $adicciones, $vive_con;
    public $paciente = null;
    public $ficha = null;
    public $idPaciente = null;

    protected $listeners = ['pacienteId' => 'getDataPaciente'];

    public function getDataPaciente(Paciente $id)
    {
        $this->ficha = $id->fichaMedica;
        $this->paciente = $id;
        $this->idPaciente = $id->id;
        /* dd($this->ficha); */
    }

    public function submit()
    {
        $date = date("Y-m-d H:i:s");

        if ($this->nombre != null)
            DB::table('pacientes')->where('id', $this->idPaciente)->update(['nombre' => $this->nombre, 'updated_at' => $date]);

        if ($this->apellidos != null)
            DB::table('pacientes')->where('id', $this->idPaciente)->update(['apellidos' => $this->apellidos, 'updated_at' => $date]);

        if ($this->edad != null)
            DB::table('pacientes')->where('id', $this->idPaciente)->update(['edad' => $this->edad, 'updated_at' => $date]);

        if ($this->domicilio != null)
            DB::table('pacientes')->where('id', $this->idPaciente)->update(['domicilio' => $this->domicilio, 'updated_at' => $date]);

        if ($this->nacimiento != null)
            DB::table('pacientes')->where('id', $this->idPaciente)->update(['fecha_nacimiento' => $this->nacimiento, 'updated_at' => $date]);

        if ($this->telefono != null)
            DB::table('pacientes')->where('id', $this->idPaciente)->update(['telefono_correo' => $this->telefono, 'updated_at' => $date]);

        if ($this->escolaridad != null)
            DB::table('ficha_medica')->where('id', $this->idPaciente)->update(['escolaridad' => $this->nombre, 'updated_at' => $date]);

        if ($this->ocupacion != null)
            DB::table('pacientes')->where('id', $this->idPaciente)->update(['ocupacion' => $this->nombre, 'updated_at' => $date]);

        if ($this->estado_civil != null)
            DB::table('pacientes')->where('id', $this->idPaciente)->update(['estado_civil' => $this->nombre, 'updated_at' => $date]);

        if ($this->religion != null)
            DB::table('pacientes')->where('id', $this->idPaciente)->update(['religion' => $this->nombre, 'updated_at' => $date]);

        if ($this->adicciones != null)
            DB::table('pacientes')->where('id', $this->idPaciente)->update(['adicciones' => $this->nombre, 'updated_at' => $date]);

        if ($this->vive_con != null)
            DB::table('pacientes')->where('id', $this->idPaciente)->update(['vive_con' => $this->nombre, 'updated_at' => $date]);


        $this->dispatchBrowserEvent('closeModal');
        $this->emit('saveData');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.form-edit-ficha-paciente', [
            'pacientes' => $this->paciente,
            'ficha' => $this->ficha
        ]);
    }
}
