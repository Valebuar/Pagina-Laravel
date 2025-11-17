<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::paginate(10);
        return view('empleado.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleado.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'       => 'required|string|max:255',
            'documento'    => 'required|string|max:20',
            'cargo'        => 'required|string|max:255',
            'salario'      => 'required|numeric',
            'fecha_ingreso'=> 'required|date',
            'correo'       => 'required|email',
            'telefono'     => 'nullable|string|max:20',
            'estado'       => 'required|string|max:50',
        ]);

        Empleado::create($request->all());

        return redirect()->route('empleado.index')
            ->with('success', 'Empleado registrado correctamente.');
    }

    public function show($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleado.show', compact('empleado'));
    }

    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'       => 'required|string|max:255',
            'documento'    => 'required|string|max:20',
            'cargo'        => 'required|string|max:255',
            'salario'      => 'required|numeric',
            'fecha_ingreso'=> 'required|date',
            'correo'       => 'required|email',
            'telefono'     => 'nullable|string|max:20',
            'estado'       => 'required|string|max:50',
        ]);

        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());

        return redirect()->route('empleado.index')
            ->with('success', 'Empleado actualizado correctamente.');
    }

    public function destroy($id)
    {
        Empleado::findOrFail($id)->delete();

        return redirect()->route('empleado.index')
            ->with('success', 'Empleado eliminado correctamente.');
    }
}
