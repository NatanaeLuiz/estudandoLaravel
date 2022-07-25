@extends('layouts.main')

@section('title', 'PB Eventos')

@section('content')

    <h1>Teste</h1>
    @if(10 > 5)
        <p>A Condição e verdadeira</p>
    @else
        <p>A condição e falsa</p>
    @endif

    <!--Comentario com HTML-->
    {{-- Comentario do blade--}}

    <p>{{ $nome }}</p>

    <!--IF e ELSE-->
    @if($sexo == "M")
        <p>Nome: {{$nome}} tem {{$idade}} anos e trabalha com {{$profissao}}</p>
        <p>Sexo: {{$sexo}}</p>
    @else
        <p>Nome: {{$nome}} tem {{$idade}} anos e trabalha com {{$profissao}}</p>
        <p>Sexo: {{$sexo}}</p>
    @endif 

    <!--FOR-->
    <h2>FOR - loop</h2>
    @for($i = 0; $i < count($arr); $i++)
        <p>{{$arr[$i]}} - posição {{ $i }}</p>
    @endfor

    <!--FOREACH-->
    <h2>FOREACH - loop</h2>
    @foreach($nomes as $nome)
        <p>{{$nome}} - posição {{ $loop->index }}</p>
    @endforeach

    <!--Utilizando PHP-->
    <h2>PHP</h2>
    @php
        $name = "Teste João";
        echo $name;
    @endphp

    <!--Imagem-->
    <img src="/img/EventosdeRH.jpg" alt="Banner">
    
@endsection  