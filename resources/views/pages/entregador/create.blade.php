<x-dash-layout>
<h2 class='text-4xl'>Inserir Novo Entregador</h2>
    <form action="/entregador" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"/></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input type="text" name="cpf"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"/></td>
            </tr>
            <tr>
                <td>Vencimento CNH:</td>
                <td><input type="date" name="vencimento_cnh"/></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="password" name="senha"/></td>
            </tr>
    
            <tr align="center">
                <td colspan="2"><input type="submit" value="Criar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/entregadores" style="display: inline">Voltar</a></td>
            </tr>
        </table>
    </form>
</x-dash-layout>