<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vacante;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VacanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reclutadores = User::where('rol', 2)->get();

        foreach ($reclutadores as $reclutador) {
            Vacante::factory()->count(10)->create([
                'user_id' => $reclutador->id,
            ]);
        }
    }
}
