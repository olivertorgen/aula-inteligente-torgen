<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    /**
     * Muestra una lista de todos los recursos.
     */
    public function index()
    {
        // Obtiene todas las aulas de la base de datos
        $aulas = Aula::all();
        // Retorna la vista 'aulas.index' y le pasa las aulas
        return view('aulas.index', compact('aulas'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        // Retorna la vista 'aulas.create'
        return view('aulas.create');
    }

    /**
     * Almacena un recurso recién creado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
        ]);

        // Crea una nueva instancia de Aula con los datos validados
        $aula = new Aula();
        $aula->nombre = $request->input('nombre');
        $aula->ubicacion = $request->input('ubicacion');
        $aula->capacidad = $request->input('capacidad');
        $aula->save();

        // Redirecciona al usuario a la página de listado de aulas con un mensaje de éxito
        return redirect()->route('aulas.index')->with('success', '¡Aula creada exitosamente!');
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function edit(Aula $aula)
    {
        // Retorna la vista 'aulas.edit' y le pasa el aula a editar
        return view('aulas.edit', compact('aula'));
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aula $aula)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
        ]);

        // Actualiza el aula con los datos validados
        $aula->update($request->all());

        // Redirecciona al usuario a la página de listado de aulas con un mensaje de éxito
        return redirect()->route('aulas.index')->with('success', '¡Aula actualizada exitosamente!');
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     *
     * @param  \App\Models\Aula  $aula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aula $aula)
    {
        // Elimina el aula
        $aula->delete();

        // Redirecciona al usuario a la página de listado de aulas con un mensaje de éxito
        return redirect()->route('aulas.index')->with('success', '¡Aula eliminada exitosamente!');
    }
}
