<table {{$attributes->merge(['class'=>'table table-'.$type])}}>
    <thead style="background-color:gray; color:black">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr style="background-color: lightgray">
                <td><a href="/clientes/{{ $cliente->id }}">{{ $cliente->id }}</a></td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->foto }}</td>
                <td><a href="{{ route('editCli', $cliente->id) }}">editar</a> |
                    <a href="{{ route('deleteCli', $cliente->id) }}">deletar</a>
                </td>
            </tr>
        @endforeach
        <tr><td colspan="5"></td>
            <td>
                <a  href="/criarCliente"><button>Criar Novo Cliente</button></a>
            </td>
        </tr>
    </tbody>
</table>