<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AiresAcondicionados;
use App\Models\Aula;

class AiresAcondicionadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aires = AiresAcondicionados::all();
        return view('aires_acondicionados.index', compact('aires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aulas = Aula::all();
        return view('aires_acondicionados.create', compact('aulas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required|string|max:255',
            'aula_id' => 'required|exists:aulas,id',
        ]);

        AiresAcondicionados::create($request->all());

        return redirect()->route('aires_acondicionados.index')->with('success', 'Aire acondicionado creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aire = AiresAcondicionados::with('aula')->findOrFail($id);
        return view('aires_acondicionados.show', compact('aire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aire = AiresAcondicionados::findOrFail($id);
        $aulas = Aula::all();
        return view('aires_acondicionados.edit', compact('aire', 'aulas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'modelo' => 'required|string|max:255',
            'aula_id' => 'required|exists:aulas,id',
        ]);

        $aire = AiresAcondicionados::findOrFail($id);
        $aire->update($request->all());

        return redirect()->route('aires_acondicionados.index')->with('success', 'Aire acondicionado actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aire = AiresAcondicionados::findOrFail($id);
        $aire->delete();

        return redirect()->route('aires_acondicionados.index')->with('success', 'Aire acondicionado eliminado con éxito.');
    }
}
