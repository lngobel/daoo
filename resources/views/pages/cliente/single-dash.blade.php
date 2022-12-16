<x-dash-layout>
<div class="text-center mt-8">
    @vite('resources/css/show-cli.css')
    @if ($cliente)
        <h1 class='my-12 text-4xl font-bold'>{{ $cliente->nome }}</h1>
        <table>
            </thead>
            <tbody>
                <tr>
                    <th>CPF</th>
                    <td>{{ $cliente->cpf }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $cliente->email }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    {{-- <td>{{ $cliente->status ? 'On' : 'Off' }}</td> --}}
                </tr>
            </tbody>
        </table>
        <a href="{{ route('editCli', $cliente->id) }}"><button>Editar</button></a>
        <a href="{{ route('deleteCli', $cliente->id) }}"><button>Deletar</button></a>
    @else
        <p>Clientes não encontrados! </p>
    @endif
    <div>
        <a href="/dashboard">&#9664;Voltar</a>
    </div>
</div>
</x-dash-layout>