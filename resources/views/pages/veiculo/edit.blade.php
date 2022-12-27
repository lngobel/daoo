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
            <tr>
                <td>Id Entregador:</td>
                <td><input type="number" name="entregador_id" value="{{$veiculo->entregador_id}}"/></td>
            </tr>

            <tr align="center">
                <td colspan="2">
                <x-primary-button>
                    <input type="submit" name='confirmar' value="Salvar"/>
                    </x-primary-button>
                </td>
            </tr>
        </table>
    </form>
    <x-secondary-button>
        <a href="/veiculos">Cancelar</a>
    </x-secondary-button>
</x-dash-layout>