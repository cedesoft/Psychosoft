<?php

namespace App\Http\Livewire;

use Livewire\{Component, WithPagination};
use App\Models\Paciente;

class PacientesTable extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 5;
    public $field = null;
    public $order = null;
    public $icon = '-circle';
    protected $queryString = [
        'search' => ['except' => ''],
        'field' => ['except' => null],
        'order' => ['except' => null]
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

    public function render()
    {
        $pacientes = Paciente::where('nombre', 'like', "%{$this->search}%")
            ->orWhere('apellidos', 'like', "%{$this->search}%");

        if ($this->field && $this->order) {
            $pacientes = $pacientes->orderBy($this->field, $this->order);
        } else {
            $this->field = null;
            $this->order = null;
        }
        $pacientes = $pacientes->paginate($this->perPage);

        return view('livewire.pacientes-table', [
            'pacientes' => $pacientes
        ]);
    }
}
