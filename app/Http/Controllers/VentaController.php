<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        $clientes = Cliente::all();
        return view('ventas.index', compact('ventas', 'clientes'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('ventas.create', compact('clientes', 'productos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|integer',
            'producto_id' => 'required|integer',
            'cantidad' => 'required|integer',
            'total' => 'required|numeric',
        ]);

        Venta::create($request->all());

        return redirect()->route('ventas.index')
            ->with('success', 'Venta registrada satisfactoriamente.');
    }

    public function show($id)
    {
        $venta = Venta::findOrFail($id);
        return view('ventas.show', compact('venta'));
    }

    public function edit($id)
    {
        $venta = Venta::findOrFail($id);
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('ventas.edit', compact('venta', 'clientes', 'productos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'cliente_id' => 'required|integer',
            'producto_id' => 'required|integer',
            'cantidad' => 'required|integer',
            'total' => 'required|numeric',
        ]);

        $venta = Venta::findOrFail($id);
        $venta->update($request->all());

        return redirect()->route('ventas.index')
            ->with('success', 'Venta actualizada satisfactoriamente.');
    }

    public function destroy($id)
    {
        $venta = Venta::findOrFail($id);
        $venta->delete();

        return redirect()->route('ventas.index')
            ->with('success', 'Venta eliminada satisfactoriamente.');
    }
}
