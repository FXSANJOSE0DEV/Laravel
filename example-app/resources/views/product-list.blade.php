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
                    <h4>{{$product->name}}</h4>
                    <p class="prace"><strong> {{number_format($product->price,2)}} €</strong></p>
                    {{--                    <p>{{$product->description}}</p>--}}
                </a>
            @endforeach


        </div>
    </section>

@endsection


