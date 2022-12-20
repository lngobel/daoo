<x-dash-layout>
    <h2 class='text-4xl'>Editar Entregador</h2>
    <form action="{{route('updateEnt',$entregador->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value="{{$entregador->nome}}"/></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input type="text" name="cpf" value="{{$entregador->cpf}}"/></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="{{$entregador->email}}"/></td>
            </tr>
            <tr>
                <td>Vencimento CNH:</td>
                <td><input type="date" name="vencimento_cnh" value="{{$entregador->vencimento_cnh}}"/></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="password" name="senha" value="{{$entregador->senha}}"/></td>
            </tr>

            <tr align="center">
                <td colspan="2">
                    <input type="submit" name='confirmar' value="Salvar"/>
                </td>
            </tr>
        </table>
    </form>
    <a href="/entregadores"><button>Cancelar</button></a>
</x-dash-layout>