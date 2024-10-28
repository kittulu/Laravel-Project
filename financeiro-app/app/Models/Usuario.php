<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    public static function listarUsuarios()
    {
        return [
            ['nome' => 'João', 'cargo' => 'Gerente', 'escolaridade' => 'Superior Completo'],
            // Adicione mais 9 registros
        ];
    }
}
