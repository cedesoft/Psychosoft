<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FichaPaciente extends Component
{
    public $nombre, $apellidos, $domicilio, $nacimiento, $edad;
    public $telefono, $escolaridad, $ocupacion, $estado_civil, $religion, $adicciones, $vive_con;

    protected $rules = [
        'nombre' => 'required|min:5|max:30',
        'apellidos' => 'required|max:60',
        'domicilio' => 'required',
        'nacimiento' => 'required|min:10|max:11',
        'edad' => 'required',
        'telefono' => 'min:10|max:10',
        'escolaridad' => 'required',
        'ocupacion' => 'required',
        'estado_civil' => 'required',
        'religion' => 'required|max:90',
        'adicciones' => 'required',
        'vive_con' => 'required'
    ];



    public function submit()
    {
        $validarDatos = $this->validate();
    }
    public function render()
    {
        return view('livewire.ficha-paciente');
    }
}
