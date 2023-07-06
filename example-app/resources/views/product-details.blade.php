
@extends('layouts.layout')
<!-- Section 1 Navbar -->
@section('content')
@section ('title')
Détail product
@endsection
@section('product-details')
    <div class="container">
        <div class="detail_product">
            <img src="https://www.laboutiqueducavalier.com/44545-large_default/masque-anti-mouche-anti-uv-cheval-de-trait.jpg"
                alt="Image ">
            <h2>Anti-mouche</h2>
            <p>Masque anti-mouches avec grand filet protecteur éloigné des yeux et du chanfrein grâce à des coutures innovantes</p>
            <button class="panier_button" type="button">
                Ajouter au panier
            </button>
        </div>
        <h5>Autres produits similaires </h5>
        <div class="products">

            <div class="product-box">
                <img src="https://www.equiphorse.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/m/image_5440.jpg"
                    alt="Image 1">
                <h2>Selle Western 1</h2>
                <button class="product_button" type="button">
                    Voir le produit
                </button>
            </div>
            <div class="product-box">
                 <img src="https://www.kramer.fr/$WS/kraemer-pferdesport/websale8_shop-kraemer-pferdesport/produkte/medien/bilder/gross/B183216_MA.jpg"
                        alt="Image 2">
                 <h2>Side-pull</h2>
                <button class="product_button" type="button">
                        Voir le produit
                </button>
            </div>
            <div class="product-box">
                 <img src="https://www.equi-services.fr/3558-large_default/tapis-feutre-ronzon.jpg" alt="Image 3">
                 <h2>Tapis-feutre</h2>
                 <button class="product_button" type="button">
                        Voir le produit
                </button>
            </div>

            <div class="product-box">
                <img src="https://www.epplejeck.fr/img/casque-d-%C3%A9quitation-royal-matt-harry-s-horse-noir-dor%C3%A9_1500x1500_107770.webp"
                        alt="Image 3">
                <h2>Bombe</h2>
                 <button class="product_button" type="button">
                        Voir le produit
                 </button>
            </div>

            <div class="product-box">
                <img src="https://www.kramer.fr/$WS/kraemer-pferdesport/websale8_shop-kraemer-pferdesport/produkte/medien/bilder/gross/B280093_S.jpg"
                        alt="Image 3">
                 <h2>Etriers</h2>
                 <button class="product_button" type="button">
                        Voir le produit
                </button>
            </div>
            <div class="product-box">
                <img src="https://www.mylookpro.com/3663-large_default/pantalon-de-travail-blanc-azurite.jpg"
                        alt="Image 3">
                 <h2>Pantalon Griper</h2>
                <button class="product_button" type="button">
                        Voir le produit
                 </button>
             </div>
            <div class="product-box">
                <img src="https://www.boutique-equitation.com/18178/pantalon-d-hiver-softshell-chaud-hkm.jpg"
                        alt="Image 3">
                 <h2>Pantalon hiver</h2>
                <button class="product_button" type="button">
                        Voir le produit
                </button>
            </div>
            <div class="product-box">
                <img src="https://www.kramer.fr/$WS/kraemer-pferdesport/websale8_shop-kraemer-pferdesport/produkte/medien/bilder/gross/B810555_S.jpg"
                        alt="Image 3">
                 <h2>Pantalon taille haute</h2>
                 <button class="product_button" type="button">
                        Voir le produit
                </button>
            </div>
        </div>
    </div>
@endsection

