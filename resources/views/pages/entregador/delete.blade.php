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
                    <x-danger-button>
                        <input type="submit" name='confirmar' value="Deletar"/>
                    </x-danger-button>
                    </td>
                </tr>
            </table>
        </form>
    @else
        <p>Entregadores não encontrados! </p>
    @endif
    <x-secondary-button>
        <a href="/entregadores">Cancelar</a>
    </x-secondary-button>
</x-dash-layout>