<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    @if ($cliente)
        <h1>{{ $cliente->nome }}</h1>
        <ul>
            <li>CPF: {{ $cliente->cpf }}</li>
            <li>Email: {{ $cliente->email }}</li>
            <li>Foto: {{ $cliente->foto }}</li>
        </ul>
        <form action="{{route('removeCli',$cliente->id)}}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste cliente?</h4>
            <table>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" name='confirmar' value="Deletar"/>
                        <input type="submit" name='confirmar' value="Cancelar"/>
                    </td>
                </tr>
            </table>
        </form>
    @else
        <p>Clientes não encontrados! </p>
        <a href="/clientes">&#9664;Voltar</a>
    @endif
</body>
</html>