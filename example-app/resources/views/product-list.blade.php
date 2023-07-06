<!DOCTYPE html>
<html>
<head>
    <title>Page Produit</title>
    <link rel="stylesheet" href="{{ asset('/css/css_product_page.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link  href="{{ asset('assets/style.css')}}"rel="stylesheet">
    <title>Galoper</title>

</head>
<body>
    <div>
    @include('includes.header')
    </div>

<section class="section1">

<div class="product-container ">
    
    <div class="product-box">
        <img src="https://www.equiphorse.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/m/image_5440.jpg" alt="Image 1">
        <h2>Selle Western 1</h2>
        <p>Description de l'article 1.</p>
    </div>

    <div class="product-box">
        <img src="https://www.kramer.fr/$WS/kraemer-pferdesport/websale8_shop-kraemer-pferdesport/produkte/medien/bilder/gross/B183216_MA.jpg" alt="Image 2">
        <h2>Side-pull</h2>
        <p>Description de l'article 2.</p>
    </div>

    <div class="product-box">
        <img src="https://www.equi-services.fr/3558-large_default/tapis-feutre-ronzon.jpg" alt="Image 3">
        <h2>Tapis-feutre</h2>
        <p>Description de l'article 3.</p>
    </div>

    <div class="product-box">
        <img src="https://www.laboutiqueducavalier.com/44545-large_default/masque-anti-mouche-anti-uv-cheval-de-trait.jpg" alt="Image 3">
        <h2>Anti-mouche</h2>
        <p>Description de l'article 3.</p>
    </div>

    <div class="product-box">
        <img src="https://lagrandesellerie.fr/262-large_default/casque-d-equitation-reference-antares-sellier.jpg" alt="Image 3">
        <h2>Bombe</h2>
        <p>Description de l'article 3.</p>
    </div>

    <div class="product-box">
        <img src="https://www.kramer.fr/$WS/kraemer-pferdesport/websale8_shop-kraemer-pferdesport/produkte/medien/bilder/gross/B280093_S.jpg" alt="Image 3">
        <h2>Etriers</h2>
        <p>Description de l'article 3.</p>
    </div>

    <div class="product-box">
        <img src="https://www.mylookpro.com/3663-large_default/pantalon-de-travail-blanc-azurite.jpg" alt="Image 3">
        <h2>Pantalon Griper</h2>
        <p>Description de l'article 3.</p>
    </div>

    <div class="product-box">
        <img src="https://www.boutique-equitation.com/18178/pantalon-d-hiver-softshell-chaud-hkm.jpg" alt="Image 3">
        <h2>Pantalon hiver</h2>
        <p>Description de l'article 3.</p>
    </div>

    <div class="product-box">
        <img src="https://www.kramer.fr/$WS/kraemer-pferdesport/websale8_shop-kraemer-pferdesport/produkte/medien/bilder/gross/B810555_S.jpg" alt="Image 3">
        <h2>Pantalon taille haute</h2>
        <p>Description de l'article 3.</p>
    </div>



</div>
@include('includes.footer')
</section>

</body>
</html>

