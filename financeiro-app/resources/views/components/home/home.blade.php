<!-- resources/views/home.blade.php -->

<x-layout.app>
    <h1>Bem-vindo ao Sistema de Gestão</h1>

    <h2>Lista de Usuários</h2>
    <x-usuario.usuarios-index :usuarios="$usuarios" />

    <h2>Lista de Contas a Pagar e Receber</h2>
    <x-financeiro.financeiro-index :contas="$contas" />
</x-layout.app>
