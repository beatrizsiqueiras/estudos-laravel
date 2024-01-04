@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Evento</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nome do Evento">
            </div>
            <div class="form-group">
                <label for="city">Local do Evento</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Cidade - Estado">
            </div>
            <div class="form-group">
                <label for="private">O evento é privado?</label>
                <select class="form-control" name="private" id="private">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                    placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Criar Evento">

        </form>
    </div>
@endsection
