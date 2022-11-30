<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    @if ($clientes->count()>0)
    <table>
        <thead>
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
            @foreach($clientes as $cliente)
            <tr>
                <td><a href="http://localhost:8082/clientes/{{$cliente->id}}">{{$cliente->id}}</a></td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->cpf}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->foto}}</td>
                <td>{{($cliente->status)?'On':'Off'}}</td>
                <td>
                    <a href="{{route('deleteCli',$cliente->id)}}" title="Deletar">&#128465</a>
                    <a href="{{route('editCli',$cliente->id)}}" title="Editar">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Clientes não encontrados! </p>
    @endif
</body>
</html>