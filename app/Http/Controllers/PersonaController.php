<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Nombre'=> 'required',
            'Apellidos'=> 'required',
            'Dirección'=> 'required',
            'Teléfono'=> 'required',
            'Sexo'=> 'required',
            'Fecha_nacimiento'=> 'required',
            'Profesión'=> 'required',
        ]);

        Persona::create($request->all());

        return redirect()->route('personas.index')->with('success','Persona creada correctamente.');       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $personas = Persona::findOrFail($id);
        return view('personas.show', compact('personas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $personas = Persona::findOrFail($id);
        return view('personas.edit', compact('personas'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'Nombre'=> 'required',
            'Apellidos'=> 'required',
            'Dirección'=> 'required',
            'Teléfono'=> 'required',
            'Sexo'=> 'required',
            'Fecha_nacimiento'=> 'required',
            'Profesión'=> 'required',
        ]);

        // Persona::create($request->all());
        $personas = Persona::findOrFail($id);

        $personas->update($request->all());

        return redirect()->route('personas.index')->with('success','Persona actualizada correctamente.');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $personas = Persona::findOrFail($id);
        $personas->delete();
        return redirect()->route('personas.index')->with('success','Persona Eliminada correctamente.');
    }
}
