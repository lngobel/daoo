<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Veiculos</title>
</head>
<body>
    @if ($veiculo)
        <h1>{{ $veiculo->placa }}</h1>
        <ul>
            <li>Renavam: {{ $veiculo->renavam }}</li>
            <li>Vencimento do Documneto: {{ $veiculo->vencimento_doc }}</li>
        </ul>
        <form action="{{route('removeVei',$veiculo->id)}}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste veículo?</h4>
            <table>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" name='confirmar' value="Deletar"/>
                    </td>
                </tr>
            </table>
        </form>
    @else
        <p>Veículos não encontrados! </p>
        <a href="/veiculos">&#9664;Voltar</a>
    @endif
</body>
</html>