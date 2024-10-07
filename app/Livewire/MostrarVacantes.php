<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\Attributes\On;

class MostrarVacantes extends Component
{
    #[On('eliminarVacante')]
    public function eliminarVacante($vacanteId)
    {
        Vacante::findOrFail($vacanteId)->delete();
        session()->flash('message', 'Vacante eliminada exitosamente.');
    }

    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.mostrar-vacantes', compact('vacantes'));
    }
}
