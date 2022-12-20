    <x-dash-layout>
    <h1>Clientes</h1>
    @if ($clientes->count()>0)
        <x-tables.clientes :clientes="$clientes" type="hover"/>
    @else
        <p>Clientes não encontrados! </p>
    @endif
    </x-dash-layout>