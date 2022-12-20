<x-dash-layout>
    <h2 class='text-4xl'>Entregadores</h2>
    @if (isset($entregadores) && $entregadores->count() > 0)
        <x-tables.entregadores :entregadores="$entregadores" class='table-odd' type='hover' />
        @auth
            <div style="display:flex; flex-direction: row; justify-content:flex-end">
                <a href="/entregador"><button>Novo Entregador</button></a>
            </div>
        @endauth
    @else
        <p>Entregadores não encontrados! </p>
    @endif         
</x-dash-layout>
