<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link  href="{{ asset('assets/style.css')}}"rel="stylesheet">
    <title>Galoper</title>
</head>

<!-- Section 1 Navbar -->

<body>
    <main class="global">
        @include('includes.header')

        <!-- Section 1 search -->


        <!-- Section 2  -->
        <section class="section2" id="#">
            <div class="content1">
                <h2 class="title1"><a href="#">LE MOiS DU PONTALON</a></h2>
                <div class="card">
                    <img class="img" src="{{ asset('assets/images/produits/image-1.jpg')}}" alt="Pantalon d'équitation">
                    <h4 class="information"><a href="#">Pantalon d'équitation</a></h4>
                    <p class="prace">50<strong>€</strong></p>
                    <div class="space">
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked2"></i>
                    </div>
                </div>
                <div class="card">
                    <img class="img" src="{{ asset('assets/images/produits/image-2.jpg')}}" alt="Pantalon d'équitation">
                    <h4 class="information"><a href="#">Pantalon d'équitation</a></h4>
                    <p class="prace">70<strong>€</strong></p>
                    <div class="space">
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                    </div>
                </div>
                <div class="card">
                    <img class="img" src="{{ asset('assets/images/produits/image3.jpg')}}"alt="Pantalon d'équitation">
                    <h4 class="information"><a href="#">Pantalon d'équitation</a></h4>
                    <p class="prace">76<strong>€</strong></p>
                    <div class="space"><i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked2"></i>
                    </div>
                </div>
                <div class="card">
                    <img class="img" src="{{ asset('assets/images/produits/img6.jpg')}}" alt="Pantalon d'équitation">
                    <h4 class="information"><a href="#">Pantalon d'équitation</a></h4>
                    <p class="prace">46<strong>€</strong></p>
                    <div class="space"><i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked2"></i>
                        <i class="fa-solid fa-star cheked2"></i>
                    </div>
                </div>
                <div class="card">
                    <img class="img" src="{{ asset('assets/images/produits/7.jpg')}}" alt="Pantalon d'équitation">
                    <h4 class="information"><a href="#">Pantalon d'équitation</a></h4>
                    <p class="prace">23<strong>€</strong></p>
                    <div class="space">
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked2"></i>
                    </div>
                </div>
                <div class="card">
                    <img class="img" src="{{ asset('assets/images/produits/etrier.jpg')}}" alt="Pantalon d'équitation">
                    <h4 class="information"><a href="#">Pantalon d'équitation</a></h4>
                    <p class="prace">96<strong>€</strong></p>
                    <div class="space">
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                        <i class="fa-solid fa-star cheked"></i>
                    </div>
                </div>
                <div class="title1">
                    <h5><a href="#">Afiicher Plus</a></h5>
                </div>
            </div>
            <div class="content2">
                <div class="title2">
                    <h2><a href="#">les soldes</a></h2>
                    <i class="fa-solid fa-star cheked1"></i>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/produits/gpa.jpg')}}" alt="Bombe">
                    <div class="item-infos">
                        <h3><a href="#">Bombe</a></h3>
                        <p class="prix-info">328<strong>€</strong></p>
                        <div class="star"><i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/produits/selle western.jpg')}}" alt="selle-Western">
                    <div class="item-infos">
                        <h3><a href="#">selle-Western</a></h3>
                        <p class="prix-info">1071<strong>€</strong></p>
                        <div class="star">
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked2"></i>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('assets/images/produits/tapis ronzon.png')}}" alt="Hôtel Tout bleu est Blanc">
                    <div class="item-infos">
                        <h3><a href="#">Tapis feutre RONZON</a></h3>
                        <p class="prix-info">168<strong>€</strong></p>
                        <div class="star"><i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked"></i>
                            <i class="fa-solid fa-star cheked2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3 Recommandé pour vous -->
        <a href="#">
            <h1 class="titre3">Recommandé pour vous</h1>
        </a>
        <section class="section3" id="Activites">
            <div class="activites">
                <div class="global1">
                    <div class="acti1">
                        <img src="{{ asset('assets/images/produits/produit anti-mouch.jpg')}}" alt="Produit anti-mouches">
                        <h3>
                            <a href="#"> Produit anti-mouches</a>
                        </h3>
                    </div>
                    <div class="acti2">
                        <div class="acti_item" id="activite2">
                            <img src="{{ asset('assets/images/produits/masque-anti-mouche.jpg')}}" alt="Anti-mouches">
                            <h3><a href="#">Anti-mouches</a> </h3>
                        </div>
                        <div class="acti_item2" id="activite3">
                            <img src="{{ asset('assets/images/produits/saide poull.jpg')}}" alt="Side-pull">
                            <h3>
                                <a href="#">Side-pull</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="global2">
                    <div class="acti1">
                        <img src="{{ asset('assets/images/produits/etrier.jpg')}}" alt="ETRIERS">
                        <h3>
                            <a href="#">ETRIERS</a>
                        </h3>
                    </div>
                    <div class="acti1">
                        <img src="{{ asset('assets/images/produits/saide poull.jpg')}}" alt="ETRIERS">
                        <h3>
                            <a href="#">ETRIERS</a>
                        </h3>
                    </div>
            </div>
        </section>
        <!--Footer-->
    </main>

      <!--Footer include-->
      @include('includes.footer')
</body>

</html>

