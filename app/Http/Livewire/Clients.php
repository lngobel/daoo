<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class Clients extends Component
{
    public $clientes;
    public $orderAsc = TRUE;

    public $nome;
    public $cpf;
    public $email;
    public $senha;

    public function mount()
    {
        $this->clientes = Cliente::all();
    }

    private function list(){
        if($this->orderAsc)
            $this->clientes = Cliente::all();
         else $this->clientes = Cliente::all()->reverse();
     }

    public function remove($id){
        if(!Cliente::destroy($id))
            return "Erro!";
        $this->list();
    }

    public function save(){
        $novoCliente  = [
            "nome" => $this->nome,
            "cpf" => $this->cpf,
            "email" => $this->email,
            "senha" => $this->senha
        ];

        Cliente::create($novoCliente);
        $this->clear();
        $this->orderAsc = false;
        $this->list();
    }

    private function clear()
    {
        $this->nome = '';
        $this->cpf = '';
        $this->email = '';
        $this->senha = '';
    }

    public function orderByName(){
        $this->orderBy('nome');
    }

    public function orderBy($column='id')
    {
        $this->clientes = Cliente::orderBy($column, $this->orderAsc ? 'asc' : 'desc')->get();
        $this->orderAsc = !$this->orderAsc;
    }

    public function render()
    {
        return view('livewire.clients');
    }
}
