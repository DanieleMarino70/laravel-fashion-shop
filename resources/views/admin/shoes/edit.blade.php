@extends('layouts.app')

@section('content')
    <div class="container">
{{-- @include('layouts.partials.errors') --}}

        <form action="{{ route('shoes.update', $shoe) }}" method="POST">
            @method('PUT') @csrf
        
            <label for="manufacturer" class="form-label">manufacturer</label>
            <input
                type="text"
                class="form-control @error('manufacturer') is-invalid @enderror"
                id="manufacturer"
                name="manufacturer"
                value="{{ $shoe->manufacturer }}"
            />
            @error('manufacturer')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        
            
            <label for="model" class="form-label">model</label>
            <input
                type="text"
                class="form-control @error('model') is-invalid @enderror"
                id="model"
                name="model"
                value="{{ $shoe->model }}"
            />
            @error('model')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        
            <label for="material" class="form-label">material</label>
            <input
                type="text"
                class="form-control @error('material') is-invalid @enderror"
                id="material"
                name="material"
                value="{{ $shoe->material }}"
            />
            @error('material')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
            
        
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
                class="form-control @error('price') is-invalid @enderror"
                id="price"
                name="price"
                value="{{ $shoe->price }}"
            />
            @error('price')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        
            <label for="size" class="form-label">size</label>
            <input
                type="text"
                class="form-control  @error('size') is-invalid @enderror"
                id="size"
                name="size"
                value="{{ $shoe->size }}"
            />
            @error('size')
                <div class="invalid-feedback">
                {{ $message }}
               </div>
            @enderror
        
        
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection