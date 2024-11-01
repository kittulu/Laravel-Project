<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Conta;
use App\Models\Usuario;

class HomeController extends Controller
{
    public function index()
    {
        $contas = Conta::listarContas();
        $usuarios = Usuario::listarUsuarios();

        return view('home', compact('usuarios', 'contas'));
    }
}
