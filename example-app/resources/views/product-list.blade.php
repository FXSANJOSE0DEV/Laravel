@extends('layouts.layout')
@section('title')
    catalogue
@endsection
@section('body')
    {{--@section('content')--}}

    <section>
        <div class="product-container">
            @foreach($results as $product)
            <a href="/product/{{$product->id}}" class="product-box">
                    <img
                        src="{{$product->image}}"
                        alt="Image 1">
                    <h2>{{$product->name}}</h2>
{{--                    <p>{{$product->description}}</p>--}}
            </a>
            @endforeach


        </div>
    </section>

@endsection


