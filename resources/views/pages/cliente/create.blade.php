<x-dash-layout>
    <h2 class='text-4xl'>Inserir Novo Cliente</h2>
    <form id=create action="/cliente" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" /></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input type="text" name="cpf" /></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" name="email" /></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="password" name="senha" /></td>
            </tr>                
        </table>
        <input type="submit" value="Criar"/>
    </form>
    
    <a href="/dashboard"><button>Cancelar</button></a>
</x-dash-layout>