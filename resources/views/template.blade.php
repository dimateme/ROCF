<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("frontend/accueil/fonts/icomoon/style.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/accueil/css/owl.carousel.min.css")}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("frontend/accueil/css/bootstrap.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/accueil/css/carte.css')}}" />
    <!-- Style -->
    <link rel="stylesheet" href="{{asset("frontend/accueil/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/template/nav.css")}}"/>

    @yield('ajouts_header')
    <title>@yield('titre')</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{asset("frontend/accueil/images/rocflogo.png")}}" alt="Logo Image">
        </div>
        <div class="titreMobileDiv">
            <a class="titreMobile" href="{{route('accueil')}}">ROCF</a>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li class="listeLiens"><a class="listeLiens" href="#">Notre Mission</a></li>
            <li class="listeLiens"><a href="#">Tables de Concertation</a></li>
            <a class="titreNav" href="{{route('accueil')}}">ROCF</a>
            <li class="listeLiens"><a href="{{route('partenaires')}}">Nos Partenaires</a></li>
            <li class="listeLiens"><a href="#">À Propos</a></li>
            @if(session()->exists('courriel'))
            <li class="listeBouton"><a class="login-button" href="{{route('deconnecter')}}">Déconnexion</a></li>
            @endif
            @if(!session()->exists('courriel'))
            <li class="listeBouton"><a class="login-button" href="{{route('connecter')}}">Espace Membre</a></li>
            @endif
        </ul>
    </nav>


    @yield('contenu')
    <script src="{{asset("frontend/template/nav.js")}}"></script>
    <script src="{{asset("frontend/accueil/js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset("frontend/accueil/js/popper.min.js")}}"></script>
    <script src="{{asset("frontend/accueil/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("frontend/accueil/js/jquery.sticky.js")}}"></script>
    <script src="{{asset("frontend/accueil/js/main.js")}}"></script>

</body>
</html>
