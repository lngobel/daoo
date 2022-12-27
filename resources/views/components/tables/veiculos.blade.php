<div x-data="{ open: false }">
    <table {{ $attributes->merge(['class'=>'table table-'.$type]) }}>
        @vite('resources/css/table.css')
        <thead>
            <tr>
                <th><a href="#" wire:click="orderBy">Id</a></th>
                <th><a href="#" wire:click="orderByPlaca">Placa</a></th>
                <th>Renavam</th>
                <th>Vencimento Doc.</th>
                @if(Auth::user() && Route::is('veiculos'))
                    <th>Ações</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($veiculos as $veiculo)
                <tr>
                    @if(Auth::user() && Route::is('veiculos'))
                        <td><a href="{{ route('veiculo.single-dash',$veiculo->id) }}">{{ $veiculo->id }}</a></td>
                        <td><a href="{{ route('veiculo.single-dash',$veiculo->id) }}">{{ $veiculo->placa }}</a></td>
                    @else
                        <td><a href="/veiculos/{{ $veiculo->id }}">{{ $veiculo->id }}</a></td>
                        <td><a href="/veiculos/{{ $veiculo->id }}">{{ $veiculo->placa }}</a></td>
                    @endif
                    <td>{{ $veiculo->renavam }}</td>
                    <td>{{ $veiculo->vencimento_doc }}</td>
                    @if(Auth::user() && Route::is('veiculos'))
                    <td>
                        <a href="{{ route('editVei', $veiculo->id) }}">
                            <x-primary-button>Editar</x-primary-button>
                        </a>
                        <a href="{{ route('deleteVei', $veiculo->id) }}">
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
            <x-forms.veiculo-create/>
        </div>
    </div>
</div>