<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['user_id','nome', 'descricao'];


    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
