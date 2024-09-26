<?php
namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Credito;
use App\Models\Cliente; // Asegúrate de importar el modelo Cliente
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::with('credito')->get();
        return view('pagos.index', compact('pagos'));
    }

    public function create()
    {
        $creditos = Credito::all();
        $clientes = Cliente::all(); // Obtenemos los clientes
        return view('pagos.create', compact('creditos', 'clientes')); // Pasamos los clientes a la vista
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id', // Añadimos validación para cliente
            'credito_id' => 'required|exists:creditos,id',
            'monto_pagado' => 'required|numeric',
            'fecha_pago' => 'required|date',
        ]);

        Pago::create($request->all());
        return redirect()->route('pagos.index')->with('success', 'Pago registrado con éxito.');
    }

    public function edit(Pago $pago)
    {
        $creditos = Credito::all();
        $clientes = Cliente::all(); // Obtenemos los clientes también en edit
        return view('pagos.edit', compact('pago', 'creditos', 'clientes'));
    }

    public function update(Request $request, Pago $pago)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id', // Añadimos validación para cliente
            'credito_id' => 'required|exists:creditos,id',
            'monto_pagado' => 'required|numeric',
            'fecha_pago' => 'required|date',
        ]);

        $pago->update($request->all());
        return redirect()->route('pagos.index')->with('success', 'Pago actualizado con éxito.');
    }

    public function destroy(Pago $pago)
    {
        $pago->delete();
        return redirect()->route('pagos.index')->with('success', 'Pago eliminado con éxito.');
    }
}