@extends('layouts.layout')
@section('title')
    catalogue
@endsection
@section('body')
    {{--@section('content')--}}

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
            @endforeach
            {{--            <div class="product-box">--}}
            {{--                <img--}}
            {{--                    src="https://www.kramer.fr/$WS/kraemer-pferdesport/websale8_shop-kraemer-pferdesport/produkte/medien/bilder/gross/B183216_MA.jpg"--}}
            {{--                    alt="Image 2">--}}
            {{--                <h2>Side-pull</h2>--}}
            {{--                <p>Description de l'article 2.</p>--}}
            {{--            </div>--}}

            {{--            <div class="product-box">--}}
            {{--                <img src="https://www.equi-services.fr/3558-large_default/tapis-feutre-ronzon.jpg" alt="Image 3">--}}
            {{--                <h2>Tapis-feutre</h2>--}}
            {{--                <p>Description de l'article 3.</p>--}}
            {{--            </div>--}}

            {{--            <div class="product-box">--}}
            {{--                <img--}}
            {{--                    src="https://www.laboutiqueducavalier.com/44545-large_default/masque-anti-mouche-anti-uv-cheval-de-trait.jpg"--}}
            {{--                    alt="Image 3">--}}
            {{--                <h2>Anti-mouche</h2>--}}
            {{--                <p>Description de l'article 3.</p>--}}
            {{--            </div>--}}

            {{--            <div class="product-box">--}}
            {{--                <img--}}
            {{--                    src="https://www.epplejeck.fr/img/casque-d-%C3%A9quitation-royal-matt-harry-s-horse-noir-dor%C3%A9_1500x1500_107770.webp"--}}
            {{--                =======--}}
            {{--                src="https://www.hourvari.fr/243-medium_default/casque-bombe-d-equitation.jpg"--}}
            {{--                alt="Image 3">--}}
            {{--                <h2>Bombe</h2>--}}
            {{--                <p>Description de l'article 3.</p>--}}
            {{--            </div>--}}

            {{--            <div class="product-box">--}}
            {{--                <img--}}
            {{--                    src="https://www.kramer.fr/$WS/kraemer-pferdesport/websale8_shop-kraemer-pferdesport/produkte/medien/bilder/gross/B280093_S.jpg"--}}
            {{--                    alt="Image 3">--}}
            {{--                <h2>Etriers</h2>--}}
            {{--                <p>Description de l'article 3.</p>--}}
            {{--            </div>--}}

            {{--            <div class="product-box">--}}
            {{--                <img src="https://www.mylookpro.com/3663-large_default/pantalon-de-travail-blanc-azurite.jpg"--}}
            {{--                     alt="Image 3">--}}
            {{--                <h2>Pantalon Griper</h2>--}}
            {{--                <p>Description de l'article 3.</p>--}}
            {{--            </div>--}}

            {{--            <div class="product-box">--}}
            {{--                <img src="https://www.boutique-equitation.com/18178/pantalon-d-hiver-softshell-chaud-hkm.jpg"--}}
            {{--                     alt="Image 3">--}}
            {{--                <h2>Pantalon hiver</h2>--}}
            {{--                <p>Description de l'article 3.</p>--}}
            {{--            </div>--}}

            {{--            <div class="product-box">--}}
            {{--                <img--}}
            {{--                    src="https://www.kramer.fr/$WS/kraemer-pferdesport/websale8_shop-kraemer-pferdesport/produkte/medien/bilder/gross/B810555_S.jpg"--}}
            {{--                    alt="Image 3">--}}
            {{--                <h2>Pantalon taille haute</h2>--}}
            {{--                <p>Description de l'article 3.</p>--}}
            {{--            </div>--}}


        </div>
    </section>

@endsection


