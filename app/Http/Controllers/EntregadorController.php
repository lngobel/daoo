<?php

namespace App\Http\Controllers;

use App\Models\Entregador;
use Illuminate\Http\Request;

class EntregadorController extends Controller
{
    private $entregador;

    public function __construct()
    {
        $this->entregador = new Entregador();
    }

    public function  index(){
        return view('entregadores',['entregadores'=>$this->entregador->all()]);
    }

    public function show($id){
        return view('entregador',['entregador'=>$this->entregador->find($id)]);
    }

    public function create(){
        return view('entregador_create');
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
        return redirect('/entregadores');
    }

    public function edit($id){
        $data = ['entregador' => Entregador::find($id)];
        return view('entregador_edit', $data);
    }

    public function delete($id){
        return view('entregador_remove',['entregador'=>Entregador::find($id)]);
    }

    public function remove(Request $request, $id){
        if($request->confirmar==="Deletar")
            if(!Entregador::destroy($id))
                dd("Erro ao deletar o entregador $id!");
        return redirect('/entregadores');
    }
}
