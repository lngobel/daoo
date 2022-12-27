<div x-data="{ open: false }">
    <table {{ $attributes->merge(['class'=>'table table-'.$type]) }}>
        @vite('resources/css/table.css')
        <thead>
            <tr>
                <th><a href="#" wire:click="orderBy">Id</a></th>
                <th><a href="#" wire:click="orderByName">Nome</a></th>
                <th>CPF</th>
                <th>Email</th>
                <th>Vencimento CNH</th>
                <th>Foto</th>
                @if(Auth::user() && Route::is('entregadores'))
                    <th>Ações</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($entregadores as $entregador)
                <tr>
                    @if(Auth::user() && Route::is('entregadores'))
                        <td><a href="{{ route('entregador.single-dash',$entregador->id) }}">{{ $entregador->id }}</a></td>
                        <td><a href="{{ route('entregador.single-dash',$entregador->id) }}">{{ $entregador->nome }}</a></td>
                    @else
                        <td><a href="/entregadores/{{ $entregador->id }}">{{ $entregador->id }}</a></td>
                        <td><a href="/entregadores/{{ $entregador->id }}">{{ $entregador->nome }}</a></td>
                    @endif
                    <td>{{ $entregador->cpf }}</td>
                    <td>{{ $entregador->email }}</td>
                    <td>{{ $entregador->vencimento_cnh }}</td>
                    <td>{{ $entregador->foto }}</td>
                    @if(Auth::user() && Route::is('entregadores'))
                    <td>
                        <a href="{{ route('editEnt', $entregador->id) }}">
                            <x-primary-button>Editar</x-primary-button>
                        </a>
                        <a href="{{ route('deleteEnt', $entregador->id) }}">
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
            <x-forms.entregador-create/>
        </div>
    </div>
</div>