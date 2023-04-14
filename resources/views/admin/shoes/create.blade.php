@extends('layouts.app')


@section('content')



<div class="container mt-5">
@include('layouts.partials.errors')


    <form action="{{ route('shoes.store') }}" method="POST" enctype="multipart/form-data">
           @csrf
           <div class="mb-3">
               <label for="manufacturer" class="form-label">Produttore</label>
               <input type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder="Produttore" value="{{old('manufacturer')}}" >
            
           </div>

           <div class="mb-3">
               <label for="model" class="form-label">Modello</label>
               <input type="text" class="form-control" id="model" name="model" placeholder="Modello" value="{{old('model')}}">
           </div>

           <div class="mb-3">
               <label for="material" class="form-label">Materiale</label>
               <input type="text" class="form-control" id="material" name="material" placeholder="Materiale" value="{{old('material')}}">
           </div>

           <div class="mb-3">
               <label for="price" class="form-label">Prezzo</label>
               <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo" value="{{old('price')}}">
           </div>

           <div class="mb-3">
               <label for="size" class="form-label">Taglia</label>
               <input type="text" class="form-control" id="size" name="size" placeholder="Taglia" value="{{old('size')}}">
           </div>

           
           <div class="mb-3">
               <label for="album" class="form-label">Descrizione</label>
               <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrizione">{{old('description')}}</textarea>
           </div>

           <button class="btn btn-primary">Aggiungi</button>
       </form>
</div>
@endsection