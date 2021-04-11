<?php

namespace App\Http\Livewire;

use Livewire\{Component, WithPagination};
use App\Models\Paciente;
use Illuminate\Support\Facades\DB;

class HDPacienteTable extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 5;
    public $field = null;
    public $order = null;
    public $icon = '-circle';
    public $status = 'A';
    public $textButton = 'Deshabilitar';
    public $textButton2 = 'Habilitar';
    protected $queryString = [
        'search' => ['except' => ''],
        'field' => ['except' => null],
        'order' => ['except' => null],
        'status'
    ];

    public function mount()
    {
        $this->icon = $this->iconImage($this->order);
    }

    public function sortable($field)
    {
        if ($field !== $this->field) {
            $this->order = null;
        }
        switch ($this->order) {
            case null:
                $this->order = 'asc';
                break;
            case 'asc':
                $this->order = 'desc';
                break;
            case 'desc':
                $this->order = null;
                break;
        }
        $this->icon = $this->iconImage($this->order);
        $this->field = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function clear()
    {
        $this->reset();
    }

    public function iconImage($sort): string
    {
        if (!$sort) {
            return '-circle';
        }
        return $sort === 'asc' ? '-arrow-circle-up' : '-arrow-circle-down';
    }

    public function disablePatient($id, $status)
    {

        if ($status == 'Deshabilitar') {
            /* dd($this->textButton); */
            DB::table('pacientes')
                ->where('id', $id)
                ->update(['status' => 'I']);
        }
        if ($status == 'Habilitar') {
            /* 
            dd($this->textButton2); */
            DB::table('pacientes')
                ->where('id', $id)
                ->update(['status' => 'A']);
        }
    }

    public function render()
    {
        $pacientes = Paciente::where('nombre', 'like', "%{$this->search}%")
            ->where('status', '=', $this->status)

            ->orWhere(function ($query) {
                $query->where('apellidos', 'like', "%{$this->search}%")
                    ->where('status', '=', $this->status);
            });

        if ($this->field && $this->order) {
            $pacientes = $pacientes->orderBy($this->field, $this->order);
        } else {
            $this->field = null;
            $this->order = null;
        }
        $pacientes = $pacientes->paginate($this->perPage);

        return view('livewire.h-d-paciente-table', [
            'pacientes' => $pacientes
        ]);
    }
}
