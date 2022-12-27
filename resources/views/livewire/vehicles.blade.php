<div>
    <h2 class='text-4xl'>Veículos</h2>
    @if (isset($veiculos) && $veiculos->count() > 0)
        <x-tables.veiculos :veiculos="$veiculos" class='table-odd' type='hover' />
    @else
        <p>Veículos não encontrados! </p>
    @endif
</div>
