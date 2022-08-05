@extends('layouts.main')

@section('title', 'PB Eventos')

@section('content')
    

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            <input type="text" id="busca" name="busca" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <div id="events-container" class="cold-md-12">
        <h2>Eventos</h2>
        @if($busca)
            <p>Buscando por: {{ $busca }} </p>
        @else
            <p>Veja os eventos dos próximos dias</p>
        @endif
        <div id="cards-container" class="row">
            @foreach($eventos as $evento)
                <div class="card col-md-3">
                    <img src="/img/eventos/{{$evento->image}}" alt="{{ $evento->titulo }}">
                    <div class="card-body">
                        <div class="card-date">{{ date('d/m/Y', strtotime($evento->data)) }}</div>
                        <h5 class="card-title">{{ $evento->titulo }}</h5>
                        <p class="card-participantes">X Participantes</p>
                        <a href="/events/ {{ $evento->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
                
            @endforeach
            @if(count($eventos) == 0 && $busca)
                <p>Não foi possível encontrar nenhum evento com {{ $busca }} <a href="/">Ver todos</a> </p>
            @elseif(count($eventos) == 0)
            <p>Não há eventos disponíveis</p>
            @endif
        </div>

    </div>
    
    {{ $eventos->appends([
        'busca' => request()->get('busca', '')
    ])->links()}}

@endsection  