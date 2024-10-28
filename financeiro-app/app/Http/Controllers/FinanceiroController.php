<?php

namespace App\Http\Controllers;
use App\Models\Conta;
use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contas = Conta::listarContas(); // Array com as contas
        return view('financeiro.index', compact('contas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dados = $request->all();
        return view('financeiro.index', compact('dados'))->with('contas', Conta::listarContas());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
