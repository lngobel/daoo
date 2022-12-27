<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entregador extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'cpf', 'email', 'senha', 'vencimento_cnh', 'foto', 'status'];

    public function veiculos(){
        return $this->hasMany(Veiculo::class);
    }
}
