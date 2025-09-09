<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class AulasController extends Controller
{
    /**
     * Muestra una lista de todos los recursos.
     */
    public function index()
    {
        $aulas = Aula::all();
        return view('aulas.index', compact('aulas'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('aulas.create');
    }

    /**
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
        ]);

        Aula::create([
            'nombre' => $request->nombre,
            'ubicacion' => $request->ubicacion,
            'capacidad' => $request->capacidad,
        ]);

        return redirect()->route('aulas.index')->with('success', 'Aula creada exitosamente!');
    }

    /**
     * Muestra el recurso especificado.
     */
    public function show(Aula $aula)
    {
        return view('aulas.show', compact('aula'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Aula $aula)
    {
        return view('aulas.edit', compact('aula'));
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(Request $request, Aula $aula)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
        ]);

        $aula->update([
            'nombre' => $request->nombre,
            'ubicacion' => $request->ubicacion,
            'capacidad' => $request->capacidad,
        ]);

        return redirect()->route('aulas.index')->with('success', 'Aula actualizada exitosamente!');
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(Aula $aula)
    {
        $aula->delete();

        return redirect()->route('aulas.index')->with('success', 'Aula eliminada exitosamente!');
    }
}