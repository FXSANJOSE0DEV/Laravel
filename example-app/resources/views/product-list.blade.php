@extends('layouts.layout')
@section('title')
    catalogue
@endsection
@section('body')
    {{--@section('content')--}}

    <section class="section2">
        <div class="content1">
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
        <div>
            <form method="GET" action="{{route('index',['products.index'=>$product->id])}}">
                <button>Catéguorie 1</button>
            </form>
        </div>
        <div>
            <form method="GET" action="{{route('index',['products.index'=>$product->id])}}">
                <button>Catéguorie 2</button>
            </form>
        </div>
        <div>
            <form method="GET" action="{{route('index',['products.index'=>$product->id])}}">
                <button>Catéguorie 3</button>
            </form>
        </div>
    </section>

@endsection


