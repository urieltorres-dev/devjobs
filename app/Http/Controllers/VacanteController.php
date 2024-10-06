<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;

class VacanteController extends Controller
{
    public function index()
    {
        return view('vacantes.index');
    }

    public function create()
    {
        return view('vacantes.create');
    }

    public function show(Vacante $vacante)
    {
        return view('vacantes.show', compact('vacante'));
    }

    public function edit(Vacante $vacante)
    {
        if (!auth()->user()->can('update', $vacante)) {
            abort(403);
        }
        return view('vacantes.edit', compact('vacante'));
    }
}
