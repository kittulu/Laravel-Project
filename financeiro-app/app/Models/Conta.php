<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    public static function listarContas()
    {
        return [
            ['descricao' => 'Conta de Luz', 'valor' => 100, 'tipo' => 'A pagar'],
            // Adicione mais 9 registros
        ];
    }
}
