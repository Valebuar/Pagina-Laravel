<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Lista todos los productos.
     */
    public function index()
    {
        $productos = Producto::paginate(10);
        return view('producto.index', compact('productos'));
    }

    /**
     * Muestra el formulario de creación.
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Guarda un nuevo producto.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'      => 'required|string|max:255',
            'referencia'  => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio'      => 'required|numeric',
            'cantidad'    => 'required|integer',
            'categoria'   => 'required|string|max:255',  // <-- CORREGIDO
            'estado'      => 'required|boolean',         // <-- SI ES 0/1 ES BOOLEAN
        ]);

        Producto::create($request->all());

        return redirect()->route('producto.index')
            ->with('success', 'Producto registrado correctamente.');
    }

    /**
     * Muestra un producto específico.
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.show', compact('producto'));
    }

    /**
     * Formulario de edición.
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Actualiza un producto.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'      => 'required|string|max:255',
            'referencia'  => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio'      => 'required|numeric',
            'cantidad'    => 'required|integer',
            'categoria'   => 'required|string|max:255', // <-- CORREGIDO
            'estado'      => 'required|boolean',        // <-- CORREGIDO
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return redirect()->route('producto.index')
            ->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Elimina un producto.
     */
    public function destroy($id)
    {
        Producto::findOrFail($id)->delete();

        return redirect()->route('producto.index')
            ->with('success', 'Producto eliminado correctamente.');
    }
}
