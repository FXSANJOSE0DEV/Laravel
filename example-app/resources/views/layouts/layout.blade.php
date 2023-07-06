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
    <!--le hedear-->
@include('includes.header')
        <main>
             <!--le contenu de la page-->
            @yield('content')
            
        </main>


        <footer>
            <!--le footer-->
        @include('includes.footer')
        </footer>
        
    