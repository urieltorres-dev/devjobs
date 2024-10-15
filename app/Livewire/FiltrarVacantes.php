<?php

namespace App\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;

class FiltrarVacantes extends Component
{
    public $termino;
    public $categoria;
    public $salario;

    public function leerDatosFormulario()
    {
        $this->dispatch('buscar', $this->termino, $this->categoria, $this->salario)->to(HomeVacantes::class);
    }

    public function render()
    {
        $categorias = Categoria::all();
        $salarios = Salario::all();
        return view('livewire.filtrar-vacantes', compact('categorias', 'salarios'));
    }
}
