<!-- resources/views/financeiro/index.blade.php -->

<x-layout.app>
    <h1>Financeiro</h1>
    <button onclick="document.getElementById('formFinanceiro').style.display='block'">Cadastrar Nova Conta</button>

    <div id="formFinanceiro" style="display:none;">
        <form action="{{ url('/financeiro') }}" method="POST">
            @csrf
            <input type="text" name="descricao" placeholder="Descrição" required>
            <input type="number" name="valor" placeholder="Valor" step="0.01" required>
            <select name="tipo">
                <option value="A pagar">A pagar</option>
                <option value="A receber">A receber</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <ul>
        @foreach ($contas as $conta)
            <li>{{ $conta['descricao'] }} - R$ {{ number_format($conta['valor'], 2, ',', '.') }} - {{ $conta['tipo'] }}</li>
        @endforeach
    </ul>
</x-layout.app>

