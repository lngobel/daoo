<x-dash-layout>
    <h2 class='text-4xl'>Deletar Entregador</h2>
    @if ($entregador)
        <h1>{{ $entregador->nome }}</h1>
        <ul>
            <li>CPF: {{ $entregador->cpf }}</li>
            <li>Email: {{ $entregador->email }}</li>
            <li>Vencimento CNH: {{ $entregador->vencimento_cnh }}</li>
            <li>Foto: {{ $entregador->foto }}</li>
        </ul>
        <form action="{{route('removeEnt',$entregador->id)}}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste entregador?</h4>
            <table>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" name='confirmar' value="Deletar"/>
                    </td>
                </tr>
            </table>
        </form>
    @else
        <p>Entregadores não encontrados! </p>
        <a href="/entregadores">Cancelar</a>
    @endif
</x-dash-layout>