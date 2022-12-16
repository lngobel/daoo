<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function  index(){
        $modelCliente = new Cliente();
        $clientes = $modelCliente->all();
        return view('pages.cliente.index',
        ['clientes' => $clientes]);
    }

    public function show($id){
        return view('pages.cliente.single',['cliente' => Cliente::find($id)]);
    }

    public function create(){
        return view('pages.cliente.create');
    }

    public function store(Request $request){
        $newCliente = $request->all();
        if(Cliente::create($newCliente))
            return redirect('/dashboard');
        else
            dd("Erro ao inserir cliente!");  
    }

    public function update(Request $request, $id){
        $updatedCliente = $request->all();
        if(!Cliente::find($id)->update($updatedCliente))
            dd("Erro ao atualizar cliente");
        return redirect('/clientes');
    }

    public function edit($id){
        return view('pages.cliente.edit', ['cliente' => Cliente::find($id)]);
    }

    public function delete($id){
        return view('pages.cliente.delete',['cliente'=>Cliente::find($id)]);
    }

    public function remove(Request $request, $id){
        if($request->confirmar==="Deletar")
            if(!Cliente::destroy($id))
                dd("Erro ao deletar o cliente $id!");
        return redirect('/clientes');
    }
}
