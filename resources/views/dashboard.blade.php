<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h2 class='text-4xl'>Clientes</h2>
                    @if (isset($clientes) && $clientes->count() > 0)
                        <x-tables.clientes :clientes="$clientes" class='table-odd' type='hover' />
                        @auth
                            <div style="display:flex; flex-direction: row; justify-content:flex-end">
                                <a href="/cliente"><button>Novo Cliente</button></a>
                            </div>
                        @endauth
                    @else
                        <p>Clientes não encontrados! </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>