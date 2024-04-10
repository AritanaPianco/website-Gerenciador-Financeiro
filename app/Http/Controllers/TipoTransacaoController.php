<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transacao;

class TipoTransacaoController extends Controller
{
    
    protected $transacao;

    public function __construct(Transacao $transacao)
    {
         $this->transacao = $transacao;
         $this->middleware('auth'); 
    }


    public function index(Request $request){

          
            $metodo_pagamento_id = $request->input('metodo_pagamento_id');
            $transacao_id = $request->input('transacao_id');
            // $valor = $request->all()['valor'];

            if($metodo_pagamento_id == null && $transacao_id == null){
                // return response()->json(['error' => 'Preencha pelo menos um campo para filtrar'], 400);
                return redirect()->route('transacao.index');
            }else if($metodo_pagamento_id != null && $transacao_id != null){
                $transacoes = $this->transacao->where("metodo_pagamento_id", $metodo_pagamento_id)
                ->where('transacao_id', $transacao_id)
                ->get();
            }else if($transacao_id != null){
                $transacoes = $this->transacao->where("transacao_id", $transacao_id)->get();
            }else if($metodo_pagamento_id != null){
                $transacoes = $this->transacao->where("metodo_pagamento_id", $metodo_pagamento_id)->get();
            }
            // dd($transacoes);
            
            return view('app.components.tableFiltro', ['transacoes' => $transacoes]); 
        
    }
}
