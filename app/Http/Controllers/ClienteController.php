<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $cliente;

    public function __construct()
    {
        $this->cliente = new Cliente();
    }

    public function  index(){
        return view('clientes',['clientes'=>$this->cliente->all()]);
    }

    public function show($id){
        return view('cliente',['cliente'=>$this->cliente->find($id)]);
    }

    public function create(){
        return view('cliente_create');
    }

    public function store(Request $request){
        $newCliente = $request->all();
        if(Cliente::create($newCliente))
            return redirect('/clientes');
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
        $data = ['cliente' => Cliente::find($id)];
        return view('cliente_edit', $data);
    }

    public function delete($id){
        return view('cliente_remove',['cliente'=>Cliente::find($id)]);
    }

    public function remove(Request $request, $id){
        if($request->confirmar==="Deletar")
            if(!Cliente::destroy($id))
                dd("Erro ao deletar o cliente $id!");
        return redirect('/clientes');
    }
}
