<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoPagamento extends Model
{
    protected $fillable = ['nome', 'descricao'];


    public function transacoes()
    {
        return $this->belongsToMany('App\Transacoes');
    }


}
