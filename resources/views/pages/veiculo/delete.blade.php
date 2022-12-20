<x-dash-layout>
    <h2 class='text-4xl'>Deletar Veículo</h2>
    @if ($veiculo)
        <h1>{{ $veiculo->placa }}</h1>
        <ul>
            <li>Renavam: {{ $veiculo->renavam }}</li>
            <li>Vencimento do Documneto: {{ $veiculo->vencimento_doc }}</li>
        </ul>
        <form action="{{route('removeVei',$veiculo->id)}}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste veículo?</h4>
            <table>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" name='confirmar' value="Deletar"/>
                    </td>
                </tr>
            </table>
        </form>
    @else
        <p>Veículos não encontrados! </p>
    @endif
    <a href="/veiculos">Cancelar</a>
    </x-dash-layout>