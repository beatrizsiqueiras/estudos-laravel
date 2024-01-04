@extends('layouts.main')

@section('title', 'Eventos')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Proximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>

        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/public.jpg" alt="{{ $event->name }}">
                    <div class="card-body">
                        <p class="card-date"> 10/07/2023</p>
                        <h5 class="card-title">
                            {{ $event->name }}
                        </h5>
                        <p class="card-participants">
                            X participantes
                        </p>
                        <a href="#" class="btn btn-primary"> Saiba mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
