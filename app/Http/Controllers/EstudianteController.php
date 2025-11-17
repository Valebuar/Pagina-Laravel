<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::paginate(10);
        return view('estudiante.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiante.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombres'        => 'required|string|max:255',
            'apellidos'      => 'required|string|max:255',
            'documento'      => 'required|string|max:20|unique:estudiantes,documento',
            'correo'         => 'required|email|unique:estudiantes,correo',
            'telefono'       => 'nullable|string|max:20',
            'programa'       => 'nullable|string|max:255',
            'semestre'       => 'nullable|integer',
            'fecha_ingreso'  => 'nullable|date',
            'estado'         => 'required|boolean',
        ]);

        Estudiante::create($request->all());

        return redirect()->route('estudiante.index')
            ->with('success', 'Estudiante registrado correctamente.');
    }

    public function show($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiante.show', compact('estudiante'));
    }

    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiante.edit', compact('estudiante'));
    }

    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::findOrFail($id);

        $request->validate([
            'nombres'        => 'required|string|max:255',
            'apellidos'      => 'required|string|max:255',
            'documento'      => 'required|string|max:20|unique:estudiantes,documento,' . $id,
            'correo'         => 'required|email|unique:estudiantes,correo,' . $id,
            'telefono'       => 'nullable|string|max:20',
            'programa'       => 'nullable|string|max:255',
            'semestre'       => 'nullable|integer',
            'fecha_ingreso'  => 'nullable|date',
            'estado'         => 'required|boolean',
        ]);

        $estudiante->update($request->all());

        return redirect()->route('estudiante.index')
            ->with('success', 'Estudiante actualizado correctamente.');
    }

    public function destroy($id)
    {
        Estudiante::findOrFail($id)->delete();

        return redirect()->route('estudiante.index')
            ->with('success', 'Estudiante eliminado correctamente.');
    }
}
