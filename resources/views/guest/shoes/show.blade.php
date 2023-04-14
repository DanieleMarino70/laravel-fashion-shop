@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex mt-5">
            <div>
                <h1>
                    {{$shoe->model}}
                </h1>
                <h4><span class="opacity-75">By</span> {{$shoe->manufacturer}}</h4>
                <span>
                    {{$shoe->description}}
                </span><br><br>
                <span> <strong>PRICE: {{$shoe->price}}$</strong> </span>
            </div>
            <div class="w-50">
                <img src="https://en.pimg.jp/047/504/268/1/47504268.jpg" alt="">
            </div>
        </div>

    </div>
@endsection