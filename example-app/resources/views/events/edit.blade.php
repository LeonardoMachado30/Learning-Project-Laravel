@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

    <div class="container-fluid" style="color: black; background-color: white; padding-bottom: 2rem;">
        <div id="event-create-container" class="col-md-6 offset-md-4">
            <h1>Editado Evento: {{ $event->title }}</h1>
            <form action="/events/update/ {{ $event->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <label for="image" class="input-group-text">Imagem:</label>
                    <input type="file" id="image" name="image" class="form-control">
                    <img src="/img/events/ {{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
                </div>
                <div class="form-group">
                    <label for="title">Evento</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
                </div>
                <div class="form-group">
                    <label for="date">Data</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="title">Cidade</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Nome do usuario">
                </div>
                <div class="form-group">
                    <label for="title">O evento e privado?</label>
                    <select name="private" id="private" class="form-control">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Descrição</label>
                    <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
                </div>
                <div class="form-group">
                    <label for="title">Adicione itens de infraestrutura:</label>
                </div>
                <div class="form-group">
                    <div class="form-check form-switch">
                        <input type="checkbox" name="items[]" value="Cadeiras" class="form-check-input">
                        <label for="title"  class="form-check-label">Cadeiras</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check form-switch">
                        <input type="checkbox" name="items[]" value="Palco" class="form-check-input">
                        <label for="title" class="form-check-label">Palco</label>
                    </div>
                </div>
                <div class="form-group">
                    
                <div class="form-check form-switch">
                        <input type="checkbox" name="items[]" value="Cerveja Grátis" class="form-check-input">
                        <label for="title" class="form-check-label">Cerveja grátis</label>
                    </div>
                </div>
                <div class="form-group">
                    
                <div class="form-check form-switch">
                        <input type="checkbox" name="items[]" value="Open Food" class="form-check-input">
                        <label for="title" class="form-check-label">Open Food</label>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Criar evento" style="margin-top: 10px;">
            </form>
        </div>
    </div>

@endsection