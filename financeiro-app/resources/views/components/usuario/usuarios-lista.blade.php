
<table class="table table-striped table-bordered p-3 m-3"><thead>     
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cargo</th>
        <th>Escolaridade</th>

    </tr>
    </thead>
       <tbody>
    @foreach ($usuarios as $usuario)
    <tr>
        <td> {{ $usuario['id'] }}</td>
        <td> {{ $usuario['nome'] }}</td>
        <td>{{ $usuario['cargo'] }}</td>
        <td>{{ $usuario['escolaridade'] }}</td>
    </tr>
    @endforeach
</tbody>
<table>