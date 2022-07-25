@extends('layouts.main')

@section('titcle', 'PB Eventos')

@section('content')
    

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="busca" name="busca" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <div id="events-container" class="cold-md-12">
        <h2>Próximos Eventos</h2>
        <p>Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach($eventos as $evento)
                <div class="card col-md-3">
                    <img src="/img/eventos/{{$evento->image}}" alt="{{ $evento->titulo }}">
                    <div class="card-body">
                        <div class="card-date">10/09/2022</div>
                        <h5 class="card-title">{{ $evento->titulo }}</h5>
                        <p class="card-participantes">X Participantes</p>
                        <a href="#" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

@endsection  