<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        //
        $usuarios = Usuario::listarUsuarios(); // Array com os usuários
        return view('components.usuario.usuarios-index', compact('usuarios'));
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
        $dados = $request->all();
        $usuarios = [
            ['id' => 1, 'nome' => 'asdasdasdasas', 'cargo' => 'aaa', 'escolaridade' => 'aaa'],
            ['id' => 2, 'nome' => 'aaa', 'cargo' => 'aaa', 'escolaridade' => 'aaa'],
            
        ];

        //return view('....', compact('dados'))->with('usuarios', Usuario::listarUsuarios());
        return view('components.usuario.usuarios-index', compact('usuarios'));

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
