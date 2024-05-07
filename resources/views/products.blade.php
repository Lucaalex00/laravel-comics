@extends('layouts.app')
@section('page-title', 'aboutme')
@section ('content')
<h1 class="text-center text-primary bg-dark w-25 mx-auto my-3 ">PRODUCTS: </h1>
<div class="container">
    <div class="row row-cols-3 row-cols-sm-4">
        @foreach ($products as $product)
        <div class="col-4 g-3 ">
            <div class="card border-3 border-dark">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" width="20px" height="20px" alt=""> <!-- logo -->
                <img height="200px" src="{{$product['thumb']}}" alt="IMG">
                <h6> {{$product['title']}}</h6>
                <p> {{$product['description']}}</p>
                <div>{{$product['price']}}</div>
                <div>{{$product['sale_date']}}</div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection