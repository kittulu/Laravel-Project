<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {

        // Lista de usuários
        $usuarios = [
            ['nome' => 'João', 'cargo' => 'Gerente', 'escolaridade' => 'Superior Completo'],
            ['nome' => 'Maria', 'cargo' => 'Analista', 'escolaridade' => 'Superior Completo'],
            // Adicione mais usuários conforme necessário
        ];

        // Lista de contas
        $contas = [
            ['descricao' => 'Conta de Luz', 'valor' => 150.00, 'tipo' => 'A pagar'],
            ['descricao' => 'Venda de Produto', 'valor' => 300.00, 'tipo' => 'A receber'],
            // Adicione mais contas conforme necessário
        ];

        return view('home', compact('usuarios', 'contas'));
    }
}
