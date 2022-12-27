<div x-data="{ open: false }">
    <h2 class='text-4xl'>Clientes</h2>
    @if (isset($clientes) && $clientes->count() > 0)
        <x-tables.clientes :clientes="$clientes" class='table-odd' type='hover' />
    @else
        <p>Clientes não encontrados! </p>
        <x-secondary-button @click="open = true">
                        Cadastrar
                    </x-secondary-button>
        <div x-show="open" x-bind:class="!open ? 'hidden' : 'overflow-y-auto overflow-x-hidden pl-60 fixed top-0 right-0 left-0 z-50 h-modal md:h-full bg-gray'">
            <div class="flex flex-col w-1/2 pt-10 " @click.away="open = false">
               <x-forms.cliente-create/>
            </div>
        </div>
    @endif
</div>
