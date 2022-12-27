<div class=" w-fit h-auto m-2 p-3 drop-shadow-2xl bg-white self-center rounded-md pt-6">
    <h1 class="text-xl">Cadastrar Novo Entregador</h1>
    <!-- <form wire:submit.prevent="save" > -->
    <form @submit.prevent="$wire.save();">
        @csrf
        <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> -->
        <table>
            <tr>
                <td>Nome:</td>
                <td><input wire:model="nome" type="text" name="nome" /></td>
            </tr>
            <tr>
                <td>CPF:</td>
                <td><input wire:model="cpf" type="text" name="cpf" /></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input  wire:model="email" type="text" name="email" /></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input wire:model="senha" type="password" name="senha" /></td>
            </tr>
            <tr>
                <td>Vencimento CNH:</td>
                <td><input wire:model="vencimento_cnh" type="date" name="vencimento_cnh" /></td>
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