<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Inserir novo veiculo</h1>
    <form action="/criarVeiculo" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Placa:</td>
                <td><input type="text" name="placa"/></td>
            </tr>
            <tr>
                <td>Renavam:</td>
                <td><input type="text" name="renavam"></td>
            </tr>
            <tr>
                <td>Vencimento do Documento:</td>
                <td><input type="date" name="vencimento_doc"/></td>
            </tr>
    
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/veiculos" style="display: inline">Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>