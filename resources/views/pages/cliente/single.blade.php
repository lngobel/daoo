<x-main-layout>
    <h1>Cliente Id:{{$cliente->id}}</h1>
    @if ($cliente)

    <h3>{{$cliente->nome}}</h3>
    <ul>
        <li>Id: {{$cliente->id}}</li>
        <li>CPF: {{$cliente->cpf}}</li>
        <li>Email: {{$cliente->email}}</li>
        <li>Foto: {{$cliente->foto}}</li>
        <li>Status: {{($cliente->status)?'On':'Off'}}</li>
        <a href="{{route('deleteCli',$cliente->id)}}" title="Deletar">&#128465</a>
        <a href="{{route('editCli',$cliente->id)}}" title="Editar">Editar</a>
    </ul>

    <a href="http://localhost:8082/clientes">Voltar para Clientes</a>

    @else
    <p>Cliente não encontrado! </p>
    @endif
</x-main-layout>