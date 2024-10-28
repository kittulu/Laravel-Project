<!-- resources/views/usuarios/index.blade.php -->

<x-layout.app>
    <h1>Usuários</h1>
    <button onclick="document.getElementById('formUsuario').style.display='block'">Cadastrar Novo Usuário</button>

    <div id="formUsuario" style="display:none;">
        <form action="{{ url('/usuarios') }}" method="POST">
            @csrf
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="text" name="cargo" placeholder="Cargo" required>
            <select name="escolaridade">
                <option value="Ensino Médio">Ensino Médio</option>
                <option value="Superior Completo">Superior Completo</option>
                <option value="Pós-graduação">Pós-graduação</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <ul>
        @foreach ($usuarios as $usuario)
            <li>{{ $usuario['nome'] }} - {{ $usuario['cargo'] }} - {{ $usuario['escolaridade'] }}</li>
        @endforeach
    </ul>
</x-layout.app>

