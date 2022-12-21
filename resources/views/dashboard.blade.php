<x-dash-layout>
    <h2 class='text-4xl'>Clientes</h2>
    @if (isset($clientes) && $clientes->count() > 0)
        <x-tables.clientes :clientes="$clientes" class='table-odd' type='hover' />
    @else
        <p>Clientes não encontrados! </p>
    @endif         
</x-dash-layout>
