@extends('layouts.layout')
<!-- Section 1 Navbar -->
@section('content')

    <!-- Section 2  -->
    <h2 class="title1"><a href="/BackOffice">Ajout d'un article</a></h2>
    <section class="section2" id="#">

        <div class=" container flex flex-wrap flex-col">

            @foreach($results as $product)

                <div class="">
                    <h4 class="information"><a href="#">{{$product->name}}</a></h4>
                    <p class="prace"><strong> {{number_format($product->price,2)}} €</strong></p>
                    <form method="GET" action="{{route('zzccmxtp',['product'=>$product->id])}}">
                        <button>Mise à jour du produit</button>
                    </form>

                    <form method="POST" action="{{route('product.destroy',['id'=>$product->id])}}">
                        @csrf
                        @method('DELETE')
                        <button>Supprimer le produit</button>
                    </form>
                </div>

            @endforeach
        </div>
    </section>

@endsection
{{--{{route('zizicacamixtape',['product' => $product])}}--}}
