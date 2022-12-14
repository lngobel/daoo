    <x-main-layout>
    <h1>Clientes</h1>
    @if ($clientes->count()>0)
        <x-tables.clientes :clientes="$clientes" type=""/>
    @else
        <p>Clientes não encontrados! </p>
    @endif
    </x-main-layout>