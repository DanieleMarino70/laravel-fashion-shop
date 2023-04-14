@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="d-flex justify-content-end mt-5">
            <a href="{{route('create')}}" class="btn btn-primary">Aggiungi Scarpa</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">manufacturer</th>
                    <th scope="col">model</th>
                    <th scope="col">material</th>
                    <th scope="col">price</th>
                    <th scope="col">size</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($shoes as $shoe)
                <tr>
                    <th scope="row">{{ $shoe->id }}</th>
                    <td>{{ $shoe->manufacturer }}</td>
                    <td>{{ $shoe->model }}</td>
                    <td>{{ $shoe->material }}</td>
                    <td>{{ $shoe->price }}</td>
                    <td>{{ $shoe->size }}</td>
<<<<<<< HEAD
                    <td><a href="{{ route('backoffice')}}">dettaglio</a></td>
                    <td><a href="{{ route('shoes.edit', $shoe)}}">modifica</a></td>
=======
                    <td>
                        <a href="{{ route('backoffice')}}">dettaglio</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $shoe->id }}">
                            Elimina              
                        </button>
                    </td>
>>>>>>> e634a83efe816842126a6b0822d0c6eed2cf14c1
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('admin.shoes.delete')
@endsection