<table {{ $attributes->merge(['class'=>'table table-'.$type]) }}>
    @vite('resources/css/table.css')
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Foto</th>
            @if(Auth::user() && Route::is('dashboard'))
                <th>Ações</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                @if(Auth::user() && Route::is('dashboard'))
                    <td><a href="{{ route('cliente.single-dash',$cliente->id) }}">{{ $cliente->id }}</a></td>
                    <td><a href="{{ route('cliente.single-dash',$cliente->id) }}">{{ $cliente->nome }}</a></td>
                @else
                    <td><a href="/clientes/{{ $cliente->id }}">{{ $cliente->id }}</a></td>
                    <td><a href="/cliente/{{ $cliente->id }}">{{ $cliente->nome }}</a></td>
                @endif
                <td>{{ $cliente->cpf }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->foto }}</td>
                @if(Auth::user() && Route::is('dashboard'))
                    <td><a href="{{ route('editCli', $cliente->id) }}">Editar</a> |
                        <a href="{{ route('deleteCli', $cliente->id) }}">Deletar</a>
                    </td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>