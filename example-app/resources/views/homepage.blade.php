@extends('layouts.layout')
<!-- Section 1 Navbar -->
@section('content')
    <body>
    <main class="global">


        <!-- Section 2  -->
        <section class="section2" id="#">
            <div class="content1">
                <h2 class="title1"><a href="#">L'année du Gunpla</a></h2>
                @foreach($results as $product)
                    <div class="card">
                        <a href="/product/{{$product->id}}" class="product-box">
                            <img class="img" src="{{$product->image}}" alt="Pantalon d'équitation">
                            <h4 class="information"><a href="#">{{$product->name}}</a></h4>
                            <p class="prace"><strong> {{number_format($product->price,2)}} €</strong></p>
                            <div class="space">
{{--                                                                <i class="fa-solid fa-star cheked"></i>--}}
{{--                                                                <i class="fa-solid fa-star cheked"></i>--}}
{{--                                                                <i class="fa-solid fa-star cheked"></i>--}}
{{--                                                                <i class="fa-solid fa-star cheked"></i>--}}
{{--                                                                <i class="fa-solid fa-star cheked2"></i>--}}
                            </div>
                        </a>
                    </div>
    @endforeach

                </div>
            </section>
            <!--Footer-->
        </main>

    </body>
    @endsection
