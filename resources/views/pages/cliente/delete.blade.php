<x-dash-layout>
    <h2 class='text-4xl'>Deletar Cliente</h2>
    @if ($cliente)
        <h1>{{ $cliente->nome }}</h1>
        <ul>
            <li>CPF: {{ $cliente->cpf }}</li>
            <li>Email: {{ $cliente->email }}</li>
            <li>Foto: {{ $cliente->foto }}</li>
        </ul>
        <form action="{{route('removeCli',$cliente->id)}}" method="post">
            @csrf
            <h4 style="color:red;font-weight:bold">Confirmar a exclusão deste cliente?</h4>
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
        <p>Clientes não encontrados! </p>
    @endif
    <x-secondary-button>
        <a href="/dashboard">Cancelar</a>
    </x-secondary-button>
</x-dash-layout>