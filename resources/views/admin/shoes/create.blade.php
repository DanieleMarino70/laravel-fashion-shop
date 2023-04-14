@extends('layouts.app')


@section('content')
     <form action="{{ route('shoes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{old('title')}}">
            </div>

            
            <div class="mb-3">
                <label for="author" class="form-label">Autore</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Nome Autore" value="{{old('author')}}">
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Inserisci un immagine</label>
                <input class="form-control" type="file" id="cover_image" name="cover_image">
            </div>
            
            <div class="mb-3">
                <label for="album" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrizione">{{old('description')}}</textarea>
            </div>

            <button class="btn btn-secondary">Aggiungi</button>
        </form>
@endsection