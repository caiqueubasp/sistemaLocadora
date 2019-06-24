<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;


class FilmeController extends Controller
{
    public function todosFilmes(Request $request){
        dd('Chegou aqui');
        if($request->isMethod('GET')){
            
            $todosFilmes = Filme::all();

            return view('filmes',["todosFilmes"=>$todosFilmes]);
        }
    }
}
