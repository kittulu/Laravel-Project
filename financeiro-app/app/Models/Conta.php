<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    public static function listarContas()
    {
        
            $contas = [
                ['id' => 1, 'descricao' => 'Conta de Luz', 'valor' => 150.00, 'tipo' => 'A pagar'],
                ['id' => 2, 'descricao' => 'Venda de Produto A', 'valor' => 200.00, 'tipo' => 'A receber'],
                ['id' => 3, 'descricao' => 'Compra de Material', 'valor' => 100.00, 'tipo' => 'A pagar'],
                ['id' => 4, 'descricao' => 'Serviço de Consultoria', 'valor' => 500.00, 'tipo' => 'A receber'],
                ['id' => 5, 'descricao' => 'Conta de Água', 'valor' => 80.00, 'tipo' => 'A pagar'],
                ['id' => 6, 'descricao' => 'Venda de Produto B', 'valor' => 300.00, 'tipo' => 'A receber'],
                ['id' => 7, 'descricao' => 'Pagamento de Fornecedor', 'valor' => 250.00, 'tipo' => 'A pagar'],
                ['id' => 8, 'descricao' => 'Serviço de Manutenção', 'valor' => 120.00, 'tipo' => 'A pagar'],
                ['id' => 9, 'descricao' => 'Venda de Serviço', 'valor' => 600.00, 'tipo' => 'A receber'],
                ['id' => 10, 'descricao' => 'Conta de Telefone', 'valor' => 90.00, 'tipo' => 'A pagar'],
                ['id' => 11, 'descricao' => 'Venda de Produto C', 'valor' => 400.00, 'tipo' => 'A receber'],
                ['id' => 12, 'descricao' => 'Compra de Equipamento', 'valor' => 1000.00, 'tipo' => 'A pagar'],
                ['id' => 13, 'descricao' => 'Venda de Consultoria', 'valor' => 750.00, 'tipo' => 'A receber'],
                ['id' => 14, 'descricao' => 'Conta de Internet', 'valor' => 60.00, 'tipo' => 'A pagar'],
                ['id' => 15, 'descricao' => 'Venda de Produto D', 'valor' => 450.00, 'tipo' => 'A receber'],
                ['id' => 16, 'descricao' => 'Pagamento de Licença', 'valor' => 300.00, 'tipo' => 'A pagar'],
                ['id' => 17, 'descricao' => 'Serviço de Auditoria', 'valor' => 800.00, 'tipo' => 'A receber'],
                ['id' => 18, 'descricao' => 'Compra de Materiais', 'valor' => 120.00, 'tipo' => 'A pagar'],
                ['id' => 19, 'descricao' => 'Venda de Produto E', 'valor' => 280.00, 'tipo' => 'A receber'],
                ['id' => 20, 'descricao' => 'Manutenção de Sistema', 'valor' => 350.00, 'tipo' => 'A pagar'],
                ['id' => 21, 'descricao' => 'Venda de Serviço Premium', 'valor' => 900.00, 'tipo' => 'A receber'],
                ['id' => 22, 'descricao' => 'Conta de Gás', 'valor' => 70.00, 'tipo' => 'A pagar'],
                ['id' => 23, 'descricao' => 'Venda de Produto F', 'valor' => 320.00, 'tipo' => 'A receber'],
                ['id' => 24, 'descricao' => 'Pagamento de Consultoria', 'valor' => 500.00, 'tipo' => 'A pagar'],
                ['id' => 25, 'descricao' => 'Serviço Especializado', 'valor' => 1000.00, 'tipo' => 'A receber'],
                ['id' => 26, 'descricao' => 'Compra de Equipamento', 'valor' => 1500.00, 'tipo' => 'A pagar'],
                ['id' => 27, 'descricao' => 'Venda de Serviço Avançado', 'valor' => 850.00, 'tipo' => 'A receber'],
                ['id' => 28, 'descricao' => 'Conta de Seguro', 'valor' => 300.00, 'tipo' => 'A pagar'],
                ['id' => 29, 'descricao' => 'Venda de Produto G', 'valor' => 600.00, 'tipo' => 'A receber'],
                ['id' => 30, 'descricao' => 'Manutenção Predial', 'valor' => 450.00, 'tipo' => 'A pagar'],
            ];
        return $contas;    
        
    }
}
