<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    public static function listarUsuarios()
    {
         
            $usuarios = [
                ['id' => 1, 'nome' => 'João Silva', 'cargo' => 'Gerente', 'escolaridade' => 'Superior Completo'],
                ['id' => 2, 'nome' => 'Maria Oliveira', 'cargo' => 'Analista', 'escolaridade' => 'Superior Completo'],
                ['id' => 3, 'nome' => 'Carlos Souza', 'cargo' => 'Assistente', 'escolaridade' => 'Ensino Médio'],
                ['id' => 4, 'nome' => 'Ana Lima', 'cargo' => 'Supervisor', 'escolaridade' => 'Superior Completo'],
                ['id' => 5, 'nome' => 'Lucas Ferreira', 'cargo' => 'Coordenador', 'escolaridade' => 'Pós-graduação'],
                ['id' => 6, 'nome' => 'Beatriz Almeida', 'cargo' => 'Estagiário', 'escolaridade' => 'Ensino Médio'],
                ['id' => 7, 'nome' => 'Rafael Gonçalves', 'cargo' => 'Analista', 'escolaridade' => 'Superior Completo'],
                ['id' => 8, 'nome' => 'Fernanda Costa', 'cargo' => 'Gerente', 'escolaridade' => 'Pós-graduação'],
                ['id' => 9, 'nome' => 'Roberto Dias', 'cargo' => 'Supervisor', 'escolaridade' => 'Superior Completo'],
                ['id' => 10, 'nome' => 'Juliana Rocha', 'cargo' => 'Analista', 'escolaridade' => 'Superior Completo'],
                ['id' => 11, 'nome' => 'Patrícia Santos', 'cargo' => 'Assistente', 'escolaridade' => 'Ensino Médio'],
                ['id' => 12, 'nome' => 'Sérgio Silva', 'cargo' => 'Supervisor', 'escolaridade' => 'Superior Completo'],
                ['id' => 13, 'nome' => 'Gabriela Pires', 'cargo' => 'Gerente', 'escolaridade' => 'Pós-graduação'],
                ['id' => 14, 'nome' => 'Mateus Barbosa', 'cargo' => 'Coordenador', 'escolaridade' => 'Pós-graduação'],
                ['id' => 15, 'nome' => 'Isabela Ferreira', 'cargo' => 'Assistente', 'escolaridade' => 'Ensino Médio'],
                ['id' => 16, 'nome' => 'Paulo Almeida', 'cargo' => 'Analista', 'escolaridade' => 'Superior Completo'],
                ['id' => 17, 'nome' => 'Aline Castro', 'cargo' => 'Estagiário', 'escolaridade' => 'Ensino Médio'],
                ['id' => 18, 'nome' => 'Ricardo Lima', 'cargo' => 'Coordenador', 'escolaridade' => 'Pós-graduação'],
                ['id' => 19, 'nome' => 'Larissa Silva', 'cargo' => 'Supervisor', 'escolaridade' => 'Superior Completo'],
                ['id' => 20, 'nome' => 'Vinícius Ribeiro', 'cargo' => 'Assistente', 'escolaridade' => 'Ensino Médio'],
                ['id' => 21, 'nome' => 'Amanda Santos', 'cargo' => 'Gerente', 'escolaridade' => 'Pós-graduação'],
                ['id' => 22, 'nome' => 'Thiago Oliveira', 'cargo' => 'Analista', 'escolaridade' => 'Superior Completo'],
                ['id' => 23, 'nome' => 'Carolina Correia', 'cargo' => 'Supervisor', 'escolaridade' => 'Superior Completo'],
                ['id' => 24, 'nome' => 'Eduardo Vieira', 'cargo' => 'Assistente', 'escolaridade' => 'Ensino Médio'],
                ['id' => 25, 'nome' => 'Marcelo Fernandes', 'cargo' => 'Estagiário', 'escolaridade' => 'Ensino Médio'],
                ['id' => 26, 'nome' => 'Renata Rocha', 'cargo' => 'Analista', 'escolaridade' => 'Superior Completo'],
                ['id' => 27, 'nome' => 'Fábio Almeida', 'cargo' => 'Gerente', 'escolaridade' => 'Pós-graduação'],
                ['id' => 28, 'nome' => 'Bruna Martins', 'cargo' => 'Supervisor', 'escolaridade' => 'Superior Completo'],
                ['id' => 29, 'nome' => 'Leandro Sousa', 'cargo' => 'Assistente', 'escolaridade' => 'Ensino Médio'],
                ['id' => 30, 'nome' => 'Viviane Costa', 'cargo' => 'Estagiário', 'escolaridade' => 'Ensino Médio'],
            
            
            
        ];

        return $usuarios;
    }
}
