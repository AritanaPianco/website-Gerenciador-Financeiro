<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transacao;
use App\TipoTransacao;
use App\MetodoPagamento;

class TransacaoController extends Controller
{
    protected $transacao;

    public function __construct(Transacao $transacao)
    {
        $this->transacao = $transacao;
        $this->middleware('auth');

    }


    public function create()
    {     
        return view('app.transacao');  
    }


    public function store(Request $request)
    {
        $request->validate($this->transacao->rules(), $this->transacao->feedback());
           
        $request['user_id'] = auth()->user()->id;
        $this->transacao->create($request->all());
        return redirect()->route('home');

    }

    public function index()
    {

        $id = auth()->user()->id;
        $transacoes = $this->transacao->where('user_id', $id)->with(['metodoPagamento', 'tipoTransacao'])->orderBy('id', 'desc')->paginate(10);
           
        // dd($transacoes);
        return view('app.components.table', ['transacoes' => $transacoes]); 

    }

}