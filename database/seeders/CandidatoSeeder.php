<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vacante;
use App\Models\Candidato;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CandidatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vacantes = Vacante::all();

        $desarrolladores = User::where('rol', 1)->get();

        foreach ($vacantes as $vacante) {
            $desarrolladoresSeleccionados = $desarrolladores->random(20);

            foreach ($desarrolladoresSeleccionados as $desarrollador) {
                Candidato::create([
                    'user_id' => $desarrollador->id,
                    'vacante_id' => $vacante->id,
                    'cv' => 'CV.pdf',
                ]);
            }
        }
    }
}
