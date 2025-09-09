<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cortinas;
use App\Models\Aula;

class CortinasController extends Controller
{
    public function index()
    {
        $cortinas = Cortinas::all();
        return view('cortinas.index', compact('cortinas'));
    }

    public function create()
    {
        $aulas = Aula::all();
        return view('cortinas.create', compact('aulas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string|max:255',
            'estado' => 'required|boolean',
            'aula_id' => 'required|exists:aulas,id',
        ]);

        Cortinas::create($request->all());

        return redirect()->route('cortinas.index')->with('success', 'Cortina creada con éxito.');
    }

    public function show($id)
    {
        $cortina = Cortinas::with('aula')->findOrFail($id);
        return view('cortinas.show', compact('cortina'));
    }

    public function edit($id)
    {
        $cortina = Cortinas::findOrFail($id);
        $aulas = Aula::all();
        return view('cortinas.edit', compact('cortina', 'aulas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tipo' => 'required|string|max:255',
            'estado' => 'required|boolean',
            'aula_id' => 'required|exists:aulas,id',
        ]);

        $cortina = Cortinas::findOrFail($id);
        $cortina->update($request->all());

        return redirect()->route('cortinas.index')->with('success', 'Cortina actualizada con éxito.');
    }

    public function destroy($id)
    {
        $cortina = Cortinas::findOrFail($id);
        $cortina->delete();

        return redirect()->route('cortinas.index')->with('success', 'Cortina eliminada con éxito.');
    }
}
