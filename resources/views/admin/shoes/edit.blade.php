@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('shoes.update', $shoe) }}" method="POST">
            @method('PUT') @csrf
        
            <label for="manufacturer" class="form-label">manufacturer</label>
            <input
                type="text"
                class="form-control"
                id="manufacturer"
                name="manufacturer"
                value="{{ $shoe->manufacturer }}"
            />
        
            <label for="model" class="form-label">model</label>
            <input
                type="text"
                class="form-control"
                id="model"
                name="model"
                value="{{ $shoe->model }}"
            />
        
            <label for="material" class="form-label">material</label>
            <input
                type="text"
                class="form-control"
                id="material"
                name="material"
                value="{{ $shoe->material }}"
            />
            
        
            <label for="description" class="form-label">description</label>
            <input
                type="text"
                class="form-control"
                id="description"
                name="description"
                value="{{ $shoe->description }}"
            />
        
            <label for="price" class="form-label">price</label>
            <input
                type="number"
                class="form-control"
                id="price"
                name="price"
                value="{{ $shoe->price }}"
            />
        
            <label for="size" class="form-label">size</label>
            <input
                type="text"
                class="form-control"
                id="size"
                name="size"
                value="{{ $shoe->size }}"
            />
        
        
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection