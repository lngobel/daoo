<table {{ $attributes->merge(['class'=>'table table-'.$type]) }}>
    @vite('resources/css/table.css')
    <thead>
        <tr>
            <th>Id</th>
            <th>Placa</th>
            <th>Renavam</th>
            <th>Situação IPVA</th>
            @if(Auth::user() && Route::is('veiculos'))
                <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($veiculos as $veiculo)
            <tr>
                @if(Auth::user() && Route::is('veiculos'))
                    <td><a href="{{ route('veiculo.single-dash',$veiculo->id) }}">{{ $veiculo->id }}</a></td>
                    <td><a href="{{ route('veiculo.single-dash',$veiculo->id) }}">{{ $veiculo->placa }}</a></td>
                @else
                    <td><a href="/veiculos/{{ $veiculo->id }}">{{ $veiculo->id }}</a></td>
                    <td><a href="/veiculos/{{ $veiculo->id }}">{{ $veiculo->placa }}</a></td>
                @endif
                <td>{{ $veiculo->renavam }}</td>
                <td>{{ $veiculo->situacao_ipva }}</td>
                @if(Auth::user() && Route::is('veiculos'))
                    <td><a href="{{ route('editVei', $veiculo->id) }}">Editar</a> |
                        <a href="{{ route('deleteVei', $veiculo->id) }}">Deletar</a>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>