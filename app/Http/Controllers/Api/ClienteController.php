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

    public function show(Cliente $cliente){
        try{
            return response()->json($cliente);
        }catch(\Exception $error){
            $responseError = [
                'Error' => "Cliente não encontrado!",
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

    public function update(Request $request, Cliente $cliente)
    {
        try{
            $data = $request->all();
            $cliente->update($data);
            return response()->json([
                'message'=>'Cliente atualizado com sucesso!',
                'cliente'=>$cliente
            ]);
        }catch(Exception $error){
            return response()->json([
                'Error' => "Erro ao atualizar cliente!",
                'Exception' => $error->getMessage()
            ],404);
        }
    }

    public function destroy(Cliente $cliente)
    {
        try{
            if(!$cliente->delete())
                throw new \Exception("Erro não detectado, tente mais tarde!");
            return response()->json([
                "msg" => "Cliente excluído.",
                "veiculo" => $cliente
            ]);
        }catch(Exception $error){
            return response()->json([
                'Error' => "Erro ao excluir cliente",
                'Exception' => $error->getMessage()
            ],404);
        }
    }

}
