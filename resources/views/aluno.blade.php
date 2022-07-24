@extends('layouts.main')

@section('title', 'Aluno')

@section('content')

<h1>Tela de aluno</h1>

    @if($id != null)
        <p>Exibindo aluno id: {{ $id }}</p>
    @endif
    
@endsection