<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    /**
     * Muestra una lista de todos los recursos.
     */
    public function index()
    {
        // Obtiene todas las materias de la base de datos
        $materias = Materia::all();
        // Retorna la vista 'materias.index' con la lista de materias
        return view('materias.index', compact('materias'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        // Retorna la vista 'materias.create' para el formulario de creación
        return view('materias.create');
    }

    /**
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario de 'crear materia'
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        // Crea un nuevo registro de Materia en la base de datos
        Materia::create($request->all());

        // Redirige al usuario a la vista del índice con un mensaje de éxito
        return redirect()->route('materias.index')->with('success', 'Materia creada exitosamente.');
    }

    /**
     * Muestra el recurso especificado.
     */
    public function show(Materia $materia)
    {
        // Retorna la vista 'materias.show' para mostrar los detalles de una materia
        return view('materias.show', compact('materia'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Materia $materia)
    {
        // Retorna la vista 'materias.edit' para el formulario de edición
        return view('materias.edit', compact('materia'));
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(Request $request, Materia $materia)
    {
        // Valida los datos del formulario de 'editar materia'
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        // Actualiza el registro de Materia en la base de datos
        $materia->update($request->all());

        // Redirige al usuario a la vista del índice con un mensaje de éxito
        return redirect()->route('materias.index')->with('success', 'Materia actualizada exitosamente!');
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(Materia $materia)
    {
        // Elimina el registro de Materia de la base de datos
        $materia->delete();

        // Redirige al usuario a la vista del índice con un mensaje de éxito
        return redirect()->route('materias.index')->with('success', 'Materia eliminada exitosamente!');
    }
}
