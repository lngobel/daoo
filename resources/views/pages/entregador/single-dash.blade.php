<x-dash-layout>
<div class="text-center mt-8">
    @vite('resources/css/show-cli.css')
    @if ($entregador)
        <h1 class='my-12 text-4xl font-bold'>{{ $entregador->nome }}</h1>
        <table>
            </thead>
            <tbody>
                <tr>
                    <th>CPF</th>
                    <td>{{ $entregador->cpf }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $entregador->email }}</td>
                </tr>
                <tr>
                    <th>Foto</th>
                    <td>{{ $entregador->foto }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('editEnt', $entregador->id) }}"><button>Editar</button></a>
        <a href="{{ route('deleteEnt', $entregador->id) }}"><button>Deletar</button></a>
    @else
        <p>Entregadores não encontrados! </p>
    @endif
    <div>
        <a href="/entregadores">&#9664;Voltar</a>
    </div>
</div>
</x-dash-layout>