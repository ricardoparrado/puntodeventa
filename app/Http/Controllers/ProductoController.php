<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProducto;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = CategoriaProducto::all();
        return view('productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'existencias' => 'required|integer',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $productoData = $request->all();
    
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $rutaImagen = public_path('/public/img');
            $imagen->move($rutaImagen, $nombreImagen);
            $productoData['imagen'] = '/public/img/' . $nombreImagen;
        }
    
        Producto::create($productoData);
    
        return redirect()->route('productos.index')
            ->with('success', 'Producto registrado satisfactoriamente.');
    }
    


    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'existencias' => 'required|integer',
        ]);

        $producto = Producto::findOrFail($id);

        $producto->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'existencias' => $request->existencias, 
        ]);

        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado satisfactoriamente.');
    }


    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminado satisfactoriamente.');
    }
}
