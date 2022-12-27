<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Entregador;
use Exception;
use Illuminate\Http\Request;

class EntregadorController extends Controller
{
    public function index(){
        return response()->json(Entregador::all());
    }

    public function show($id){
        try{
            return response()->json(Entregador::findOrFail($id));
        }catch(\Exception $error){
            $responseError = [
                'Error' => "O entregador com id:$id não foi encontrado!",
                'Exception' => $error->getMessage(), 
            ];
            $statusHttp = 404;
            return response()->json($responseError , $statusHttp);
        }
    }

    public function store(Request $request)
    {
        try{
            $newEntregador = $request->all();
            $storedEntregador = Entregador::create($newEntregador);
            return response()->json([
                'message'=>'Entregador cadastrado com sucesso!',
                'entregador'=>$storedEntregador
            ]);
        }catch(\Exception $error){
            $responseError = [
                'Error'=> "Erro ao cadastrar novo entregador!",
                'Exception'=>$error->getMessage(),
            ];
            $statusHttp = 404;
            return response()->json($responseError,$statusHttp);
        }
    }

    public function update(Request $request, int $id)
    {
        try{
            $data = $request->all();
            $newEntregador = Entregador::findOrFail($id);
            $newEntregador->update($data);
            return response()->json([
                'message'=>'Entregador atualizado com sucesso!',
                'entregador'=>$newEntregador
            ]);
        }catch(Exception $error){
            return response()->json([
                'Error' => "Erro ao atualizar entregador!",
                'Exception' => $error->getMessage()
            ],404);
        }
    }

    public function remove($id)
    {
        try{
            if(Entregador::findOrFail($id)->delete())
            return response()->json(["msg"=>"Entregador com id:$id removido com sucesso!"]);
        }catch(Exception $error){
            return response()->json([
                'Error' => "Erro ao excluir entregador",
                'Exception' => $error->getMessage()
            ],404);
        }
    }

    public function veiculos(Entregador $entregador){
        return response()->json($entregador->load('veiculos'));
    }
}
