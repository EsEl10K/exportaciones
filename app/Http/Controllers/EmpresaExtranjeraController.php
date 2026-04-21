<?php

namespace App\Http\Controllers;

use App\Models\EmpresaExtranjera;
use App\Http\Requests\EmpresaExtranjeraRequest;

class EmpresaExtranjeraController extends Controller
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
        $empresaExtranjeras = EmpresaExtranjera::paginate(10);

        return view('empresa-extranjera.index', compact('empresaExtranjeras'))
            ->with('i', (request()->input('page', 1) - 1) * $empresaExtranjeras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresaExtranjera = new EmpresaExtranjera();

        return view('empresa-extranjera.create', compact('empresaExtranjera'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmpresaExtranjeraRequest $request)
    {
        EmpresaExtranjera::create($request->validated());

        return redirect()->route('empresa-extranjeras.index')
            ->with('success', 'Empresa extranjera creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $empresaExtranjera = EmpresaExtranjera::findOrFail($id);

        return view('empresa-extranjera.show', compact('empresaExtranjera'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empresaExtranjera = EmpresaExtranjera::findOrFail($id);

        return view('empresa-extranjera.edit', compact('empresaExtranjera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmpresaExtranjeraRequest $request, $id)
    {
        $empresaExtranjera = EmpresaExtranjera::findOrFail($id);
        $empresaExtranjera->update($request->validated());

        return redirect()->route('empresa-extranjeras.index')
            ->with('success', 'Empresa extranjera actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empresaExtranjera = EmpresaExtranjera::findOrFail($id);
        $empresaExtranjera->delete();

        return redirect()->route('empresa-extranjeras.index')
            ->with('success', 'Empresa extranjera eliminada correctamente.');
    }
}