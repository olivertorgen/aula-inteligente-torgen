<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Focos;
use App\Models\Aula;

class FocosController extends Controller
{
    public function index()
    {
        $focos = Focos::all();
        return view('focos.index', compact('focos'));
    }

    public function create()
    {
        $aulas = Aula::all();
        return view('focos.create', compact('aulas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string|max:255',
            'estado' => 'required|boolean',
            'aula_id' => 'required|exists:aulas,id',
        ]);

        Focos::create($request->all());

        return redirect()->route('focos.index')->with('success', 'Foco creado con éxito.');
    }

    public function show($id)
    {
        $foco = Focos::with('aula')->findOrFail($id);
        return view('focos.show', compact('foco'));
    }

    public function edit($id)
    {
        $foco = Focos::findOrFail($id);
        $aulas = Aula::all();
        return view('focos.edit', compact('foco', 'aulas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tipo' => 'required|string|max:255',
            'estado' => 'required|boolean',
            'aula_id' => 'required|exists:aulas,id',
        ]);

        $foco = Focos::findOrFail($id);
        $foco->update($request->all());

        return redirect()->route('focos.index')->with('success', 'Foco actualizado con éxito.');
    }

    public function destroy($id)
    {
        $foco = Focos::findOrFail($id);
        $foco->delete();

        return redirect()->route('focos.index')->with('success', 'Foco eliminado con éxito.');
    }
}
