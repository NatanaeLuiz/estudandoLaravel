@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')

    <div id="evento-create-container" class="col-md-6 offset-md-3">

        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do evento:</label>
                <input type="file" class="form-control-file" id="image" name="image" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="titulo">Evento:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="titulo">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="titulo">O Evento é privado?:</label>
                <select name="privado" id="privado" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="titulo">Descrição do evento:</label>
                <textarea class="form-control" id="descricao" name="descricao" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>

@endsection