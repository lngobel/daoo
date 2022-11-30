<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    private $veiculo;

    public function __construct()
    {
        $this->veiculo = new Veiculo();
    }

    public function  index(){
        return view('veiculos',['veiculos'=>$this->veiculo->all()]);
    }

    public function show($id){
        return view('veiculo',['veiculo'=>$this->veiculo->find($id)]);
    }

    public function create(){
        return view('veiculo_create');
    }

    public function store(Request $request){
        $newVeiculo = $request->all();
        if(Veiculo::create($newVeiculo))
            return redirect('/veiculos');
        else
            dd("Erro ao inserir veículo!");  
    }

    public function update(Request $request, $id){
        $updatedVeiculo = $request->all();
        if(!Veiculo::find($id)->update($updatedVeiculo))
            dd("Erro ao atualizar veiculo");
        return redirect('/veiculos');
    }

    public function edit($id){
        $data = ['veiculo' => Veiculo::find($id)];
        return view('veiculo_edit', $data);
    }

    public function delete($id){
        return view('veiculo_remove',['veiculo'=>Veiculo::find($id)]);
    }

    public function remove(Request $request, $id){
        if($request->confirmar==="Deletar")
            if(!Veiculo::destroy($id))
                dd("Erro ao deletar o veiculo $id!");
        return redirect('/veiculos');
    }
}
