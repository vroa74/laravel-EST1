<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Alumno extends Component
{
    use WithPagination;

    public $filters = [
        'grado' => null,
        'grupo' => null,
        'sex' => null,
        'Fnom' => null,
        'nombres' => null,
        'apa' => null,
        'ama' => null,
        'fnac' => null,
        'status' => null,
    ];

    public $perPage = 10;

    protected $paginationTheme = 'tailwind';

    // Elimina los query strings completamente
    protected $queryString = [];

    public function updating($property)
    {
        if ($property !== 'perPage') {
            $this->resetPage();
        }
    }

    protected function aplicarFiltros($query)
    {
        foreach ($this->filters as $field => $value) {
            if ($value === null || $value === '') continue;

            if (in_array($field, ['Fnom', 'nombres', 'apa', 'ama'])) {
                $query->where($field, 'like', '%' . $value . '%');
            } elseif ($field === 'fnac') {
                $query->whereDate($field, $value);
            } else {
                $query->where($field, $value);
            }
        }

        return $query;
    }

    public function render()
    {
        $query = Student::query();
        $query = $this->aplicarFiltros($query);
        $alumnos = $query->paginate($this->perPage);

        return view('livewire.alumno', compact('alumnos'));
    }
}
