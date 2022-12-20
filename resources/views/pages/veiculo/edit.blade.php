<x-dash-layout>
    <h2 class='text-4xl'>Editar Veículo</h2>
    <form action="{{route('updateVei',$veiculo->id)}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Placa:</td>
                <td><input type="text" name="placa" value="{{$veiculo->placa}}"/></td>
            </tr>
            <tr>
                <td>Renavam:</td>
                <td><input type="text" name="renavam" value="{{$veiculo->renavam}}"/></td>
            </tr>
            <tr>
                <td>Vencimento do Documento:</td>
                <td><input type="date" name="vencimento_doc" value="{{$veiculo->vencimento_doc}}"/></td>
            </tr>

            <tr align="center">
                <td colspan="2">
                    <input type="submit" name='confirmar' value="Salvar"/>
                </td>
            </tr>
        </table>
    </form>
    <a href="/veiculos"><button>Cancelar</button></a>
</x-dash-layout>