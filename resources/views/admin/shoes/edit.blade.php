@extends('layouts.app')

@section('title', 'Modifica ' . $shoe->model .' '.$shoe->manufacturer )
    


@section('content')
    <div class="container mt-5">
{{-- @include('layouts.partials.errors') --}}

        <form action="{{ route('shoes.update', $shoe) }}" method="POST">
            @method('PUT') 
            @csrf
        
            <div class="mb-3">
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
            </div>
            
            <div class="mb-3">
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
            </div>
        
            <div class="mb-3">
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
            </div>

            
            <div class="mb-3">
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
            </div>
            
            
            <div class="mb-3">
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
            </div>    
            
            <div class="mb-3">
                <label for="album" class="form-label">Descrizione</label>
                <textarea type="text" 
                class="form-control @error('description') is-invalid @enderror" id="description" 
                name="description" 
                placeholder="Descrizione">{{ $shoe->description }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                 {{ $message }}
                </div>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection