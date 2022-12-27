<?php

namespace App\Http\Livewire;

use App\Models\Veiculo;
use Livewire\Component;

class Vehicles extends Component
{
    public $veiculos;
    public $orderAsc = TRUE;

    public $placa;
    public $renavam;
    public $vencimento_doc;
    public $entregador_id;

    public function mount()
    {
        $this->veiculos = Veiculo::all();
    }

    private function list(){
        if($this->orderAsc)
            $this->veiculos = Veiculo::all();
         else $this->veiculos = Veiculo::all()->reverse();
     }

    public function remove($id){
        if(!Veiculo::destroy($id))
            return "Erro!";
        $this->list();
    }

    public function save(){
        $novoVeiculo  = [
            "placa" => $this->placa,
            "renavam" => $this->renavam,
            "vencimento_doc" => $this->vencimento_doc,
            "entregador_id"=>$this->entregador_id
        ];

        Veiculo::create($novoVeiculo);
        $this->clear();
        $this->orderAsc = false;
        $this->list();
    }

    private function clear()
    {
        $this->placa = '';
        $this->renavam = '';
        $this->vencimento_doc = '2000/00/00';
        $this->entregador_id = 0;
    }

    public function orderByPlaca(){
        $this->orderBy('placa');
    }

    public function orderBy($column='id')
    {
        $this->veiculos = Veiculo::orderBy($column, $this->orderAsc ? 'asc' : 'desc')->get();
        $this->orderAsc = !$this->orderAsc;
    }

    public function render()
    {
        return view('livewire.vehicles');
    }
}
