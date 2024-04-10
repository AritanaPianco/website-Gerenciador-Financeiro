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


    public function index(Request $request)
    {
        $user_id = auth()->user()->id;
  
        $categorias = $this->categoria->where('user_id', $user_id)->orderBy('id', 'desc')->paginate(8);
        return view('app.categoria', ['categorias' => $categorias, 'request' => $request]);

    }

    

}
