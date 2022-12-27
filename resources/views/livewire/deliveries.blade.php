<div>
    <h2 class='text-4xl'>Entregadores</h2>
    @if (isset($entregadores) && $entregadores->count() > 0)
        <x-tables.entregadores :entregadores="$entregadores" class='table-odd' type='hover' />
    @else
        <p>Entregadores não encontrados! </p>
    @endif
</div>
