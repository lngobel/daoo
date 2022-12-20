<x-dash-layout>
    <h2 class='text-4xl'>Veículos</h2>
    @if (isset($veiculos) && $veiculos->count() > 0)
        <x-tables.veiculos :veiculos="$veiculos" class='table-odd' type='hover' />
        @auth
            <div style="display:flex; flex-direction: row; justify-content:flex-end">
                <a href="/veiculo"><button>Novo Veículo</button></a>
            </div>
        @endauth
    @else
        <p>Veículos não encontrados! </p>
    @endif         
</x-dash-layout>
