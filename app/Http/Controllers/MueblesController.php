<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Muebles;
use App\Models\Aula;

class MueblesController extends Controller
{
    public function index()
    {
        $muebles = Muebles::all();
        return view('muebles.index', compact('muebles'));
    }

    public function create()
    {
        $aulas = Aula::all();
        return view('muebles.create', compact('aulas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string|max:255',
            'aula_id' => 'required|exists:aulas,id',
        ]);

        Muebles::create($request->all());

        return redirect()->route('muebles.index')->with('success', 'Mueble creado con éxito.');
    }

    public function show($id)
    {
        $mueble = Muebles::with('aula')->findOrFail($id);
        return view('muebles.show', compact('mueble'));
    }

    public function edit($id)
    {
        $mueble = Muebles::findOrFail($id);
        $aulas = Aula::all();
        return view('muebles.edit', compact('mueble', 'aulas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tipo' => 'required|string|max:255',
            'aula_id' => 'required|exists:aulas,id',
        ]);

        $mueble = Muebles::findOrFail($id);
        $mueble->update($request->all());

        return redirect()->route('muebles.index')->with('success', 'Mueble actualizado con éxito.');
    }

    public function destroy($id)
    {
        $mueble = Muebles::findOrFail($id);
        $mueble->delete();

        return redirect()->route('muebles.index')->with('success', 'Mueble eliminado con éxito.');
    }
}
