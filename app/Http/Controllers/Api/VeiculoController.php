<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Veiculo;
use Exception;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index(){
        return response()->json(Veiculo::all());
    }

    public function show(Veiculo $veiculo){
        try{
            return response()->json($veiculo);
        }catch(\Exception $error){
            $responseError = [
                'Error' => "Veículo não encontrado!",
                'Exception' => $error->getMessage(), 
            ];
            $statusHttp = 404;
            return response()->json($responseError , $statusHttp);
        }
    }

    public function store(Request $request)
    {
        try{
            $newVeiculo = $request->all();
            $storedVeiculo = Veiculo::create($newVeiculo);
            return response()->json([
                'message'=>'Veículo cadastrado com sucesso!',
                'veículo'=>$storedVeiculo
            ]);
        }catch(\Exception $error){
            $responseError = [
                'Erro:'=> "Erro ao cadastrar novo veículo!",
                'Exception:'=>$error->getMessage(),
            ];
            $statusHttp = 404;
            return response()->json($responseError,$statusHttp);
        }
    }

    public function update(Request $request, Veiculo $veiculo)
    {
        try{
            $data = $request->all();
            $veiculo->update($data);
            return response()->json([
                'message'=>'Veículo atualizado com sucesso!',
                'veículo'=>$veiculo
            ]);
        }catch(Exception $error){
            return response()->json([
                'Error' => "Erro ao atualizar veículo!",
                'Exception' => $error->getMessage()
            ],404);
        }
    }

    public function destroy(Veiculo $veiculo)
    {
        try{
            if(!$veiculo->delete())
                throw new \Exception("Erro não detectado, tente mais tarde!");
            return response()->json([
                "msg" => "Veículo excluído.",
                "veiculo" => $veiculo
            ]);
        }catch(Exception $error){
            return response()->json([
                'Error' => "Erro ao excluir veículo",
                'Exception' => $error->getMessage()
            ],404);
        }
    }
}
