<?php

namespace App\Http\Controllers;

use App\Models\Entregador;
use Illuminate\Http\Request;

class EntregadorController extends Controller
{
    public function  index(){
        $modelEntregador = new Entregador();
        $entregadores = $modelEntregador->all();
        return view('pages.entregador.index',
        ['entregadores' => $entregadores]);
    }

    public function show($id){
        return view('pages.entregador.single',['entregador' => Entregador::find($id)]);
    }

    public function create(){
        return view('pages.entregador.create');
    }

    public function store(Request $request){
        $newEntregador = $request->all();
        if(Entregador::create($newEntregador))
            return redirect('/entregadores');
        else
            dd("Erro ao inserir entregador!"); 
    }

    public function update(Request $request, $id){
        $updatedEntregador = $request->all();
        if(!Entregador::find($id)->update($updatedEntregador))
            dd("Erro ao atualizar entregador");
        return redirect('/entregador');
    }

    public function edit($id){
        return view('pages.entregador.edit', ['entregador' => Entregador::find($id)]);
    }

    public function delete($id){
        return view('pages.entregador.delete',['entregador'=>Entregador::find($id)]);
    }

    public function remove(Request $request, $id){
        if($request->confirmar==="Deletar")
            if(!Entregador::destroy($id))
                dd("Erro ao deletar o entregador $id!");
        return redirect('/entregadores');
    }
}
