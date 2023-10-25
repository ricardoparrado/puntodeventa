<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::all();
        return view('compras.index', compact('compras'));
    }

    public function create()
    {
        return view('compras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'proveedor_id' => 'required|integer',
            'producto_id' => 'required|integer',
            'cantidad' => 'required|integer',
            'total' => 'required|numeric',
        ]);

        Compra::create($request->all());

        return redirect()->route('compras.index')
            ->with('success', 'Compra registrada satisfactoriamente.');
    }

    public function show($id)
    {
        $compra = Compra::findOrFail($id);
        return view('compras.show', compact('compra'));
    }

    public function edit($id)
    {
        $compra = Compra::findOrFail($id);
        return view('compras.edit', compact('compra'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'proveedor_id' => 'required|integer',
            'producto_id' => 'required|integer',
            'cantidad' => 'required|integer',
            'total' => 'required|numeric',
        ]);

        $compra = Compra::findOrFail($id);
        $compra->update($request->all());

        return redirect()->route('compras.index')
            ->with('success', 'Compra actualizada satisfactoriamente.');
    }

    public function destroy($id)
    {
        $compra = Compra::findOrFail($id);
        $compra->delete();

        return redirect()->route('compras.index')
            ->with('success', 'Compra eliminada satisfactoriamente.');
    }
}
