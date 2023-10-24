<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProducto;
use Illuminate\Http\Request;

class CategoriaProductoController extends Controller
{
    public function index()
    {
        $categorias = CategoriaProducto::all();
        return view('categorias-productos.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias-productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        CategoriaProducto::create($request->all());

        return redirect()->route('categorias-productos.index')
            ->with('success', 'Categoría creada satisfactoriamente.');
    }

    public function show($id)
    {
        $categoria = CategoriaProducto::findOrFail($id);
        return view('categorias-productos.show', compact('categoria'));
    }

    public function edit($id)
    {
        $categoria = CategoriaProducto::findOrFail($id);
        return view('categorias-productos.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $categoria = CategoriaProducto::findOrFail($id);
        $categoria->update($request->all());

        return redirect()->route('categorias-productos.index')
            ->with('success', 'Categoría actualizada satisfactoriamente.');
    }

    public function destroy($id)
    {
        $categoria = CategoriaProducto::findOrFail($id);
        $categoria->delete();

        return redirect()->route('categorias-productos.index')
            ->with('success', 'Categoría eliminada satisfactoriamente.');
    }
}
