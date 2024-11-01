<h2>Lista de Contas a Pagar e Receber</h2>
<table class="table table-striped table-bordered p-3 m-3"><thead>     
    <tr>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Tipo</th>
    </tr>
    </thead>
       
       <tbody>
    @foreach ($contas as $conta)
    <tr>
        <td> {{ $conta['descricao'] }}</td>
        <td>{{ $conta['valor'] }}</td>
        <td>{{ $conta['tipo'] }}</td>
    </tr>
    @endforeach
</tbody>
<table>

