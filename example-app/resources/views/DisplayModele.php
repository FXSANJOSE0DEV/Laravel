@extends('layouts.layout')
@section('title')
BDD
@endsection
@section('body')



    <section>
        <div class="product-container">
            <div class="product-box">
                @foreach($results as $product)
                <img
                    src="{{$product->image}}"
                    alt="Image 1">
                <h2>{{$product->name}}</h2>
                <p>{{$product->description}}</p>
            </div>

</section>

@endsection


