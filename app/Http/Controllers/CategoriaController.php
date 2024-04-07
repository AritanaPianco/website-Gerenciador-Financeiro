<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    protected $categoria;

    public function __construct(Categoria $categoria)
    {
         $this->categoria = $categoria;
         $this->middleware('auth'); 
    }


    public function create(){
        return view('app.categoria');
    }
    
    public function store(Request $request){
        
        $request->validate($this->categoria->rules(),$this->categoria->feedback());
        
        $this->categoria->create([
            'nome' => $request->nome,
            'descricao' => $request->descricao
        ]);
        return view('app.categoria');
        
        
    }

}
