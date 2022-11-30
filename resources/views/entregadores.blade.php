<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Entregadores</title>
</head>
<body>
    <h1>Entregadores</h1>
    @if ($entregadores->count()>0)
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
            @foreach($entregadores as $entregador)
            <tr>
                <td><a href="http://localhost:8082/entregadores/{{$entregador->id}}">{{$entregador->id}}</a></td>
                <td>{{$entregador->nome}}</td>
                <td>{{$entregador->cpf}}</td>
                <td>{{$entregador->email}}</td>
                <td>{{$entregador->foto}}</td>
                <td>{{($entregador->status)?'On':'Off'}}</td>
                <td>
                    <a href="{{route('deleteEnt',$entregador->id)}}" title="Deletar">&#128465</a>
                    <a href="{{route('editEnt',$entregador->id)}}" title="Editar">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Entregadores não encontrados! </p>
    @endif
</body>
</html>