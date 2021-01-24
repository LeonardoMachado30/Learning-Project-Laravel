@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')

<div class="container">
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie um evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem de Evento:</label>
                <input type="file" id="image" name="image" class="form-control-file">
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
                <label for="title">Cadeiras</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras">
                </div>
            </div>
            <div class="form-group">
                <label for="title">Palco</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco">
                </div>
            </div>
            <div class="form-group">
                <label for="title">Cerveja grátis</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja Grátis">
                </div>
            </div>
            <div class="form-group">
                <label for="title">Open Food</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food">
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar evento" style="margin-top: 10px;">
        </form>
    </div>
</div>

@endsection