<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;


class FilmeController extends Controller
{
    public function todosFilmes(Request $request){
      
        if($request->isMethod('GET')){
            
            $todosFilmes = Filme::all();

            return view('filmes',["todosFilmes"=>$todosFilmes]);
        }
    }

    public function editar(Request $request, $id){
        if($request->isMethod('GET')){
            
            $filme = Filme::find($id);

            return view('editarFilme',["filme"=>$filme]);
        }

        $filme = Filme::find($request->filme_id);
        $filme->titulo = $request->primeiroFilme;
        $resultado = $filme->save();

        return view("editarFilme",["resultado"=>$resultado, "filme"=>$filme]);
    }
}
