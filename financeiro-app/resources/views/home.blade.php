<!-- resources/views/home.blade.php -->

<x-layout.app>
    <div class="jumbotron align-center " >
    <h1 class="" >Bem-vindo ao Sistema de Gestão</h1>
    <h3 class="" >Shuu~~</h3> 
</div>


<div class="jumbotron">
    <!-- Seção para exibir a lista de usuários -->
    <h1>Usuários</h1>    
    <x-usuario.usuarios-lista :usuarios="$usuarios" />
</div>

    
    <div class="jumbotron">
    <h1>Financeiro</h1>
    <!-- Seção para exibir a lista de contas a pagar e receber -->

    <x-financeiro.financeiro-lista :contas="$contas" />
</div>
</x-layout.app>
