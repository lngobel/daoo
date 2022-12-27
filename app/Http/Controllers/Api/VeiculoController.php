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

    public function show($id){
        try{
            return response()->json(Veiculo::findOrFail($id));
        }catch(\Exception $error){
            $responseError = [
                'Error' => "O veículo com id:$id não foi encontrado!",
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

    public function update(Request $request, int $id)
    {
        try{
            $data = $request->all();
            $newVeiculo = Veiculo::findOrFail($id);
            $newVeiculo->update($data);
            return response()->json([
                'message'=>'Veículo atualizado com sucesso!',
                'veículo'=>$newVeiculo
            ]);
        }catch(Exception $error){
            return response()->json([
                'Error' => "Erro ao atualizar veículo!",
                'Exception' => $error->getMessage()
            ],404);
        }
    }

    public function remove($id)
    {
        try{
            if(Veiculo::findOrFail($id)->delete())
            return response()->json(["msg"=>"Veículo com id:$id removido com sucesso!"]);
        }catch(Exception $error){
            return response()->json([
                'Error' => "Erro ao excluir veículo",
                'Exception' => $error->getMessage()
            ],404);
        }
    }
}
