<div x-data="{ open: false }">
    <table {{ $attributes->merge(['class'=>'table table-'.$type]) }}>
        @vite('resources/css/table.css')
        <thead>
            <tr>
                <th><a href="#" wire:click="orderBy">Id</a></th>
                <th><a href="#" wire:click="orderByName">Nome</a></th>
                <th>CPF</th>
                <th>Email</th>
                <th>Foto</th>
                @if(Auth::user() && Route::is('dashboard'))
                    <th>Ações</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    @if(Auth::user() && Route::is('dashboard'))
                        <td><a href="{{ route('cliente.single-dash',$cliente->id) }}">{{ $cliente->id }}</a></td>
                        <td><a href="{{ route('cliente.single-dash',$cliente->id) }}">{{ $cliente->nome }}</a></td>
                    @else
                        <td><a href="/clientes/{{ $cliente->id }}">{{ $cliente->id }}</a></td>
                        <td><a href="/cliente/{{ $cliente->id }}">{{ $cliente->nome }}</a></td>
                    @endif
                    <td>{{ $cliente->cpf }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->foto }}</td>
                    @if(Auth::user() && Route::is('dashboard'))
                    <td>
                        <a href="{{ route('editCli', $cliente->id) }}">
                            <x-primary-button>Editar</x-primary-button>
                        </a>
                        <a href="{{ route('deleteCli', $cliente->id) }}">
                            <x-danger-button>Remover</x-danger-button>
                        </a>
                    </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <x-secondary-button @click="open = true">
                        Cadastrar
                    </x-secondary-button>
    <div x-show="open" x-bind:class="!open ? 'hidden' : 'overflow-y-auto overflow-x-hidden pl-60 fixed top-0 right-0 left-0 z-50 h-modal md:h-full bg-gray'">
        <div class="flex flex-col w-1/2 pt-10 " @click.away="open = false">
            <x-forms.cliente-create/>
        </div>
    </div>
</div>