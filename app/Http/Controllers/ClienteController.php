<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::paginate(10);
        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'documento'       => 'required|string|max:20|unique:clientes,documento',
            'correo'          => 'nullable|email|unique:clientes,correo',
            'telefono'        => 'nullable|string|max:20',
            'direccion'       => 'nullable|string|max:255',
            'ciudad'          => 'nullable|string|max:255',
            'tipo_cliente'    => 'nullable|string|max:50',
            'estado'          => 'required|boolean',
        ]);

        Cliente::create($request->all());

        return redirect()->route('cliente.index')
            ->with('success', 'Cliente registrado correctamente.');
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.show', compact('cliente'));
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'documento'       => 'required|string|max:20|unique:clientes,documento,' . $id,
            'correo'          => 'nullable|email|unique:clientes,correo,' . $id,
            'telefono'        => 'nullable|string|max:20',
            'direccion'       => 'nullable|string|max:255',
            'ciudad'          => 'nullable|string|max:255',
            'tipo_cliente'    => 'nullable|string|max:50',
            'estado'          => 'required|boolean',
        ]);

        $cliente->update($request->all());

        return redirect()->route('cliente.index')
            ->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();

        return redirect()->route('cliente.index')
            ->with('success', 'Cliente eliminado correctamente.');
    }
}
