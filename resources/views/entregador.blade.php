<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entregador</title>
</head>
<body>
    <h1>Entregador Id:{{$entregador->id}}</h1>
    @if ($entregador)

    <h3>{{$entregador->nome}}</h3>
    <ul>
        <li>Id: {{$entregador->id}}</li>
        <li>CPF: {{$entregador->cpf}}</li>
        <li>Email: {{$entregador->email}}</li>
        <li>Foto: {{$entregador->foto}}</li>
        <li>Status: {{($entregador->status)?'On':'Off'}}</li>
        <a href="{{route('deleteEnt',$entregador->id)}}" title="Deletar">&#128465</a>
        <a href="{{route('editEnt',$entregador->id)}}" title="Editar">Editar</a>
    </ul>

    <a href="http://localhost:8082/entregadores">Voltar para Entregadores</a>

    @else
    <p>Entregador não encontrado! </p>
    @endif
</body>
</html>