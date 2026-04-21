<?php

namespace App\Http\Controllers;

use App\Models\EmpresaMexicana;
use App\Http\Requests\EmpresaMexicanaRequest;

class EmpresaMexicanaController extends Controller
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
        $empresaMexicanas = EmpresaMexicana::paginate(10);

        return view('empresa-mexicana.index', compact('empresaMexicanas'))
            ->with('i', (request()->input('page', 1) - 1) * $empresaMexicanas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresaMexicana = new EmpresaMexicana();

        return view('empresa-mexicana.create', compact('empresaMexicana'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmpresaMexicanaRequest $request)
    {
        EmpresaMexicana::create($request->validated());

        return redirect()->route('empresa-mexicanas.index')
            ->with('success', 'Empresa mexicana creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $empresaMexicana = EmpresaMexicana::findOrFail($id);

        return view('empresa-mexicana.show', compact('empresaMexicana'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empresaMexicana = EmpresaMexicana::findOrFail($id);

        return view('empresa-mexicana.edit', compact('empresaMexicana'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmpresaMexicanaRequest $request, $id)
    {
        $empresaMexicana = EmpresaMexicana::findOrFail($id);
        $empresaMexicana->update($request->validated());

        return redirect()->route('empresa-mexicanas.index')
            ->with('success', 'Empresa mexicana actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empresaMexicana = EmpresaMexicana::findOrFail($id);
        $empresaMexicana->delete();

        return redirect()->route('empresa-mexicanas.index')
            ->with('success', 'Empresa mexicana eliminada correctamente.');
    }
}