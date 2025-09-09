<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    /**
     * Muestra una lista de todos los recursos.
     */
    public function index()
    {
        // Obtiene todos los docentes de la base de datos
        $docentes = Docente::all();
        // Retorna la vista 'docentes.index' con la lista de docentes
        return view('docentes.index', compact('docentes'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        // Retorna la vista 'docentes.create' para el formulario de creación
        return view('docentes.create');
    }

    /**
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario de 'crear docente'.
        // Las reglas deben coincidir con los nombres de los campos en tu vista.
        $request->validate([
            'nombre' => 'required|string|max:255',
            'dni' => 'required|string|max:255|unique:docentes,dni', // 'unique' asegura que el DNI no se repita
            'especialidad' => 'required|string|max:255',
        ]);

        // Crea un nuevo registro de Docente en la base de datos.
        // El método 'create' utiliza el array de datos validados.
        Docente::create($request->all());

        // Redirige al usuario a la vista del índice con un mensaje de éxito.
        return redirect()->route('docentes.index')->with('success', 'Docente creado exitosamente.');
    }

    /**
     * Muestra el recurso especificado.
     */
    public function show(Docente $docente)
    {
        // Retorna la vista 'docentes.show' para mostrar los detalles de un docente.
        return view('docentes.show', compact('docente'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Docente $docente)
    {
        // Retorna la vista 'docentes.edit' para el formulario de edición.
        return view('docentes.edit', compact('docente'));
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(Request $request, Docente $docente)
    {
        // Valida los datos del formulario de 'editar docente'.
        // Se excluye el DNI del docente actual de la regla 'unique' para evitar errores.
        $request->validate([
            'nombre' => 'required|string|max:255',
            'dni' => 'required|string|max:255|unique:docentes,dni,' . $docente->id,
            'especialidad' => 'required|string|max:255',
        ]);

        // Actualiza el registro de Docente en la base de datos.
        // El método 'update' utiliza el array de datos validados.
        $docente->update($request->all());

        // Redirige al usuario a la vista del índice con un mensaje de éxito.
        return redirect()->route('docentes.index')->with('success', 'Docente actualizado exitosamente!');
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(Docente $docente)
    {
        // Elimina el registro de Docente de la base de datos.
        $docente->delete();

        // Redirige al usuario a la vista del índice con un mensaje de éxito.
        return redirect()->route('docentes.index')->with('success', 'Docente eliminado exitosamente!');
    }
}
