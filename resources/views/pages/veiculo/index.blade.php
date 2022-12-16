<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Veículos</title>
</head>
<body>
    <h1>Veículos</h1>
    @if ($veiculos->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Placa</th>
                <th>Renavam</th>
                <th>Situação IPVA</th>
            </tr>
        </thead>
        <tbody>
            @foreach($veiculos as $veiculo)
            <tr>
                <td><a href="http://localhost:8082/veiculos/{{$veiculo->id}}">{{$veiculo->id}}</a></td>
                <td>{{$veiculo->placa}}</td>
                <td>{{$veiculo->renavam}}</td>
                <td>{{$veiculo->situacao_ipva}}</td>
                <td>
                    <a href="{{route('deleteVei',$veiculo->id)}}" title="Deletar">&#128465</a>
                    <a href="{{route('editVei',$veiculo->id)}}" title="Editar">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Veículos não encontrados! </p>
    @endif
</body>
</html>