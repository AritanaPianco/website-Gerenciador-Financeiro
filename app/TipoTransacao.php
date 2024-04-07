<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTransacao extends Model
{
    protected $fillable = ['nome', 'descricao'];


    public function transacoes()
    {
        return $this->belongsToMany('App\Transacao');
    }

}