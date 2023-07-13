@extends('layouts.layout')
<!-- Section 1 Navbar -->
@section('content')

    <!-- Section 2  -->
    <h2 class="title1"><a href="/BackOffice">Ajout d'un article</a></h2>
    <section class="section2" id="#">

        <div class="content1">

            @foreach($results as $product)

                <div class="">
                    <h4 class="information"><a href="#">{{$product->name}}</a></h4>
                    <p class="prace"><strong> {{number_format($product->price,2)}} €</strong></p>
                    <a href="{{route('zzccmxtp',['product'=>$product->id])}}">
                    <button>Mise à jour du produit</button></a>
                    <button>Supprimer le produit</button>
                </div>

            @endforeach
        </div>
    </section>

@endsection
{{--{{route('zizicacamixtape',['product' => $product])}}--}}
