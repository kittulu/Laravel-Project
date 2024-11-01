<!-- resources/views/usuarios/index.blade.php -->
<div class="  p-3 m-3">
    <h2 >Inserir novo Usuário</h2>

    <button onclick="document.getElementById('formUsuario').style.display='block'">Cadastrar Novo Usuário</button>

    <div id="formUsuario" style="display:none;">
        <form action="{{ url('/usuarios') }}" method="POST">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="text" name="cargo" placeholder="Cargo" required>
            <select name="escolaridade">
               
                <option value="Ensino Médio">Ensino Médio</option>
                <option value="Superior Completo">Superior Completo</option>
                <option value="Pós-graduação">Pós-graduação</option>
            </select> 
            @csrf
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</div>
<!-- resources/views/components/usuario/usuarios-index.blade.php -->

