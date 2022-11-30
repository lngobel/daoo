<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veículo</title>
</head>
<body>
    <h1>Veículo Id:{{$veiculo->id}}</h1>
    @if ($veiculo)

    <h3>{{$veiculo->placa}}</h3>
    <ul>
        <li>Id: {{$veiculo->id}}</li>
        <li>Placa: {{$veiculo->placa}}</li>
        <li>Renavam: {{$veiculo->renavam}}</li>
        <li>Situção IPVA: {{($veiculo->situacao_ipva)?'Em dia':'Atrasado'}}</li>
        <a href="{{route('deleteVei',$veiculo->id)}}" title="Deletar">&#128465</a>
        <a href="{{route('editVei',$veiculo->id)}}" title="Editar">Editar</a>
    </ul>

    <a href="http://localhost:8082/veiculos">Voltar para Veículos</a>

    @else
    <p>Veículo não encontrado! </p>
    @endif
</body>
</html>