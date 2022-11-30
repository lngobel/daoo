<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Editar cliente</h1>
    <form action="{{route('updateCli',$cliente->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$cliente->nome}}"/></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input type="text" name="cpf" value="{{$cliente->cpf}}"/></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="{{$cliente->email}}"/></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="password" name="senha" value="{{$cliente->senha}}"/></td>
            </tr>

            <tr align="center">
                <td colspan="2">
                    <input type="submit" name='confirmar' value="Salvar"/>
                </td>
            </tr>
        </table>
    </form>
    <a href="/clientes"><button>Cancelar</button></a>
</body>
</html>