<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;
    protected $fillable = ['placa', 'renavam', 'vencimento_doc', 'situacao_ipva', 'entregador_id'];

    public function entregador()
    {
        return $this->belongsTo(Entregador::class);
    }
}
