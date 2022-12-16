<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Entregadores</title>
</head>
<body>
    @if ($entregador)
        <h1>{{ $entregador->nome }}</h1>
        <ul>
            <li>CPF: {{ $entregador->cpf }}</li>
            <li>Email: {{ $entregador->email }}</li>
            <li>Vencimento CNH: {{ $entregador->vencimento_cnh }}</li>
            <li>Foto: {{ $entregador->foto }}</li>
        </ul>
        <form action="{{route('removeEnt',$entregador->id)}}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste entregador?</h4>
            <table>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" name='confirmar' value="Deletar"/>
                    </td>
                </tr>
            </table>
        </form>
    @else
        <p>Entregadores não encontrados! </p>
        <a href="/entregadores">&#9664;Voltar</a>
    @endif
</body>
</html>