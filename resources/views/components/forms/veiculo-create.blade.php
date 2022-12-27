<div class=" w-fit h-auto m-2 p-3 drop-shadow-2xl bg-white self-center rounded-md pt-6">
    <h1 class="text-xl">Cadastrar Novo Veículo</h1>
    <!-- <form wire:submit.prevent="save" > -->
    <form @submit.prevent="$wire.save();">
        @csrf
        <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> -->
        <table>
            <tr>
                <td>Placa:</td>
                <td><input wire:model="placa" type="text" name="placa" /></td>
            </tr>
            <tr>
                <td>Renavam:</td>
                <td><input wire:model="renavam" type="text" name="renavam" /></td>
            </tr>
            <tr>
                <td>Vencimento Doc.:</td>
                <td><input  wire:model="vencimento_doc" type="date" name="vencimento_doc" /></td>
            </tr>
            <tr>
                <td>Id Entregador:</td>
                <td><input  wire:model="entregador_id" type="number" name="entregador_id" /></td>
            </tr>
        </table>
    </form>
    <table>
        <tr align="center">
            <td>
                <x-danger-button @click="open=false">
                    Cancelar
                </x-danger-button>
            </td>
            <td>
                <x-primary-button wire:click="save" @click="open=false" class='btn btn-success bg-green-600'>
                    Criar
                </x-primary-button>
            </td>
        </tr>
    </table>
</div>