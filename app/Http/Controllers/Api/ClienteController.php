<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Exception;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        return response()->json(Cliente::all());
    }

    public function show($id){
        try{
            return response()->json(Cliente::findOrFail($id));
        }catch(\Exception $error){
            $responseError = [
                'Error' => "O cliente com id:$id não foi encontrado!",
                'Exception' => $error->getMessage(), 
            ];
            $statusHttp = 404;
            return response()->json($responseError , $statusHttp);
        }
    }

    public function store(Request $request)
    {
        try{
            $newCliente = $request->all();
            $storedCliente = Cliente::create($newCliente);
            return response()->json([
                'message'=>'Cliente cadastrado com sucesso!',
                'cliente'=>$storedCliente
            ]);
        }catch(\Exception $error){
            $responseError = [
                'Erro:'=> "Erro ao cadastrar novo cliente!",
                'Exception:'=>$error->getMessage(),
            ];
            $statusHttp = 404;
            return response()->json($responseError,$statusHttp);
        }
    }

    public function update(Request $request, int $id)
    {
        try{
            $data = $request->all();
            $newCliente = Cliente::findOrFail($id);
            $newCliente->update($data);
            return response()->json([
                'message'=>'Cliente atualizado com sucesso!',
                'cliente'=>$newCliente
            ]);
        }catch(Exception $error){
            return response()->json([
                'Error' => "Erro ao atualizar cliente!",
                'Exception' => $error->getMessage()
            ],404);
        }
    }

    public function remove($id)
    {
        try{
            if(Cliente::findOrFail($id)->delete())
            return response()->json(["msg"=>"Cliente com id:$id removido com sucesso!"]);
        }catch(Exception $error){
            return response()->json([
                'Error' => "Erro ao excluir cliente",
                'Exception' => $error->getMessage()
            ],404);
        }
    }

}
