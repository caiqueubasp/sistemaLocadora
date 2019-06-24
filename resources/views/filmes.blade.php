@extends('template')

@section('container')

    
        <ul>
        @foreach($todosFilmes as $filme)
            <li>
                {{ $filme->titulo }}
            </li>
         @endforeach   
        </ul> 
       
@endsection