
    <div class=" p-3 m-3">
    <h2>Inserir Registro</h2>

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
    <div>
    <ul>
   
    </ul>

    </div>

</div>
    <!-- resources/views/components/financeiro/financeiro-index.blade.php -->



