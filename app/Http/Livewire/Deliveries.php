<?php

namespace App\Http\Livewire;

use App\Models\Entregador;
use Livewire\Component;

class Deliveries extends Component
{
    public $entregadores;
    public $orderAsc = TRUE;

    public $nome;
    public $cpf;
    public $email;
    public $senha;
    public $vencimento_cnh;

    public function mount()
    {
        $this->entregadores = Entregador::all();
    }

    private function list(){
        if($this->orderAsc)
            $this->entregadores = Entregador::all();
         else $this->entregadores = Entregador::all()->reverse();
     }

    public function remove($id){
        if(!Entregador::destroy($id))
            return "Erro!";
        $this->list();
    }

    public function save(){
        $novoEntregador  = [
            "nome" => $this->nome,
            "cpf" => $this->cpf,
            "email" => $this->email,
            "senha" => $this->senha,
            "vencimento_cnh" => $this->vencimento_cnh
        ];

        Entregador::create($novoEntregador);
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
        $this->vencimento_cnh = '';
    }

    public function orderByName(){
        $this->orderBy('nome');
    }

    public function orderBy($column='id')
    {
        $this->entregadores = Entregador::orderBy($column, $this->orderAsc ? 'asc' : 'desc')->get();
        $this->orderAsc = !$this->orderAsc;
    }
    public function render()
    {
        return view('livewire.deliveries');
    }
}
