<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function  index(){
        $modelVeiculo = new Veiculo();
        $veiculos = $modelVeiculo->all();
        return view('pages.veiculo.index',
        ['veiculos' => $veiculos]);
    }

    public function show($id){
        return view('pages.veiculo.single-dash',['veiculo' => Veiculo::find($id)]);
    }

    public function create(){
        return view('pages.veiculo.create');
    }

    public function store(Request $request){
        $newVeiculo = $request->all();
        if(Veiculo::create($newVeiculo))
            return redirect('/veiculos');
        else
            dd("Erro ao inserir veiculo!"); 
    }

    public function update(Request $request, $id){
        $updatedVeiculo = $request->all();
        if(!Veiculo::find($id)->update($updatedVeiculo))
            dd("Erro ao atualizar veiculo");
        return redirect('/veiculos');
    }

    public function edit($id){
        return view('pages.veiculo.edit', ['veiculo' => Veiculo::find($id)]);
    }

    public function delete($id){
        return view('pages.veiculo.delete',['veiculo'=>Veiculo::find($id)]);
    }

    public function remove(Request $request, $id){
        if($request->confirmar==="Deletar")
            if(!Veiculo::destroy($id))
                dd("Erro ao deletar o veiculo $id!");
        return redirect('/veiculos');
    }
}
