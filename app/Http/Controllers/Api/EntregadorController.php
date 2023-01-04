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

    public function show(Entregador $entregador){
        try{
            return response()->json($entregador);
        }catch(\Exception $error){
            $responseError = [
                'Error' => "Entregador não encontrado!",
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

    public function update(Request $request, Entregador $entregador)
    {
        try{
            $data = $request->all();
            $entregador->update($data);
            return response()->json([
                'message'=>'Entregador atualizado com sucesso!',
                'entregador'=>$entregador
            ]);
        }catch(Exception $error){
            return response()->json([
                'Error' => "Erro ao atualizar entregador!",
                'Exception' => $error->getMessage()
            ],404);
        }
    }

    public function destroy(Entregador $entregador)
    {
        try{
            if(!$entregador->delete())
                throw new \Exception("Erro não detectado, tente mais tarde!");
            return response()->json([
                "msg" => "Entregador excluído.",
                "entregador" => $entregador
            ]);
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
