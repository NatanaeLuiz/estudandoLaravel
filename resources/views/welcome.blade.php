@extends('layouts.main')

@section('titcle', 'PB Eventos')

@section('content')
    
    @foreach($eventos as $evento)
        <p>{{$evento -> titulo}} -- {{ $evento->descricao}}</p>
    @endforeach
    
@endsection  