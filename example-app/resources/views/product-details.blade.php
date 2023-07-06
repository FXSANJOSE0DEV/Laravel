
@extends('layouts.layout')
<!-- Section 1 Navbar -->

@section ('title')
Détail product
@endsection
@section('product-details')
    <div class="container">
        <div class="detail_product">
            <img src="https://www.laboutiqueducavalier.com/44545-large_default/masque-anti-mouche-anti-uv-cheval-de-trait.jpg"
                alt="Image ">
            <h3>Anti-mouche</h3>
            <p>Masque anti-mouches avec grand filet protecteur éloigné des yeux et du chanfrein grâce à des coutures innovantes</p>
            <button class="panier_button" type="button">
                Ajouter au panier
            </button>
        </div>
    </div>
@endsection

