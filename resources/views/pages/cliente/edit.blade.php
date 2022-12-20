<x-dash-layout>
    <h2 class='text-4xl'>Editar Cliente</h2>
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
    <a href="/dashboard"><button>Cancelar</button></a>
</x-dash-layout>