<x-dash-layout>
<div class="text-center mt-8">
    @vite('resources/css/show-cli.css')
    @if ($veiculo)
        <h1 class='my-12 text-4xl font-bold'>{{ $veiculo->placa }}</h1>
        <table>
            </thead>
            <tbody>
                <tr>
                    <th>Placa</th>
                    <td>{{ $veiculo->placa }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $veiculo->renavam }}</td>
                </tr>
                <tr>
                    <th>Situação IPVA</th>
                    <td>{{ $veiculo->situacao_ipva }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('editVei', $veiculo->id) }}"><button>Editar</button></a>
        <a href="{{ route('deleteVei', $veiculo->id) }}"><button>Deletar</button></a>
    @else
        <p>Veículos não encontrados! </p>
    @endif
    <div>
        <a href="/veiculos">&#9664;Voltar</a>
    </div>
</div>
</x-dash-layout>