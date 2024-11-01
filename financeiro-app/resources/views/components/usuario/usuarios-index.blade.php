<x-layout.app>

<div class="jumbotron">
    <!-- Seção para exibir a lista de contas a pagar e receber -->
    <x-usuario.usuarios-lista :usuarios="$usuarios" />
</div>

<div class="jumbotron">
    <!-- Seção para exibir a lista de contas a pagar e receber -->

    <x-usuario.usuarios-insert :usuarios="$usuarios" />
</div>

</x-layout.app>
