<table {{ $attributes->merge(['class'=>'table table-'.$type]) }}>
    @vite('resources/css/table.css')
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Foto</th>
            @if(Auth::user() && Route::is('entregadores'))
                <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($entregadores as $entregador)
            <tr>
                @if(Auth::user() && Route::is('entregadores'))
                    <td><a href="{{ route('entregador.single-dash',$entregador->id) }}">{{ $entregador->id }}</a></td>
                    <td><a href="{{ route('entregador.single-dash',$entregador->id) }}">{{ $entregador->nome }}</a></td>
                @else
                    <td><a href="/entregadores/{{ $entregador->id }}">{{ $entregador->id }}</a></td>
                    <td><a href="/entregadores/{{ $entregador->id }}">{{ $entregador->nome }}</a></td>
                @endif
                <td>{{ $entregador->cpf }}</td>
                <td>{{ $entregador->email }}</td>
                <td>{{ $entregador->foto }}</td>
                @if(Auth::user() && Route::is('entregadores'))
                    <td><a href="{{ route('editEnt', $entregador->id) }}">Editar</a> |
                        <a href="{{ route('deleteEnt', $entregador->id) }}">Deletar</a>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>