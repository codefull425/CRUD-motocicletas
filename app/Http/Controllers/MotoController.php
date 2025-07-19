<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motos = Moto::all();
        return view('motos.index', compact('motos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'ano' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'preco' => 'required|numeric|min:0',
        ]);

        Moto::create($request->all());

        return redirect()->route('motos.index')->with('success', 'Moto cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $moto = Moto::findOrFail($id);
        return view('motos.edit', compact('moto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $moto = Moto::findOrFail($id);
        return view('motos.edit', compact('moto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'ano' => 'required|digits:4|integer|min:1900|max:' . date('Y'),
            'preco' => 'required|numeric|min:0',
        ]);

        $moto = Moto::findOrFail($id);
        $moto->update($request->all());

        return redirect()->route('motos.index')->with('success', 'Moto atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Moto::destroy($id);
        return redirect()->route('motos.index')->with('success', 'Moto removida com sucesso!');
    }
}
