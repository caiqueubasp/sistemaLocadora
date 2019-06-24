@extends('template')

@section('container')

    
        <ul>
        @foreach($todosFilmes as $filme)
            <li>
                {{ $filme->titulo }} <a href="/filme/editar/{{$filme->filme_id}}">editar</a>
            </li>
         @endforeach   
        </ul> 
       
@endsection