<x-dash-layout>
    <h2 class='text-4xl'>Inserir Novo Veículo</h2>
    <form action="/veiculo" method="POST">
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
</x-dash-layout>