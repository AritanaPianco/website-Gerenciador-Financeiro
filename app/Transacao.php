<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    protected $fillable = ['user_id', 'metodo_pagamento_id','transacao_id', 'categoria', 'valor', 'descricao', 'data_transacao'];

    // 'marca_id' => 'exists:marcas,id'
    public function rules()
    {
        return [
            //  'user_id' => 'required|exists:users,id',   
             'metodo_pagamento_id' => 'required|exists:metodo_pagamentos,id',   
             'transacao_id' => 'required|exists:tipo_transacaos,id', 
             'categoria' => 'required|max:50',
             'valor' => 'required',  
             'descricao' => 'required',
             'data_transacao' => 'required',

        ];
    }  


    public function feedback()
    {
        return [
             'required' => 'O campo :attribute deve ser preenchido',
             'metodo_pagamento_id.exists' => 'Esse metodo de pagamento não existe',
             'transacao_id.exists' => 'Esse tipo de transação não existe',
             'categoria.max' => 'A categoria só pode no máximo 5 caracteres'    
        ];
    }


    public function user(){
        return $this->belongsTo('App\User');   
        
    }

    public function metodoPagamento(){
        return $this->belongsTo('App\MetodoPagamento', 'metodo_pagamento_id', 'id');   
        
    }

    public function tipoTransacao(){
        return $this->belongsTo('App\TipoTransacao', 'transacao_id', 'id');   
        
    }
    
   
}
