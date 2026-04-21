<?php

namespace App\Http\Controllers;

use App\Models\DetallePedido;
use App\Http\Requests\DetallePedidoRequest;

class DetallePedidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detallePedidos = DetallePedido::paginate(10);

        return view('detalle-pedido.index', compact('detallePedidos'))
            ->with('i', (request()->input('page', 1) - 1) * $detallePedidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $detallePedido = new DetallePedido();

        return view('detalle-pedido.create', compact('detallePedido'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetallePedidoRequest $request)
    {
        DetallePedido::create($request->validated());

        return redirect()->route('detalle-pedidos.index')
            ->with('success', 'Detalle de pedido creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detallePedido = DetallePedido::findOrFail($id);

        return view('detalle-pedido.show', compact('detallePedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $detallePedido = DetallePedido::findOrFail($id);

        return view('detalle-pedido.edit', compact('detallePedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetallePedidoRequest $request, $id)
    {
        $detallePedido = DetallePedido::findOrFail($id);
        $detallePedido->update($request->validated());

        return redirect()->route('detalle-pedidos.index')
            ->with('success', 'Detalle de pedido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $detallePedido = DetallePedido::findOrFail($id);
        $detallePedido->delete();

        return redirect()->route('detalle-pedidos.index')
            ->with('success', 'Detalle de pedido eliminado correctamente.');
    }
}
