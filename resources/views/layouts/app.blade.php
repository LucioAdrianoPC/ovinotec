<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Ovinotec</title>
    <!-- Scripts
    <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header style="height: 70px; background-color:rgb(212, 212, 212); vertical-align: middle">
            <div class="row">
                <div class="col-lg-2">
                    <button type="button" id="abreMenu" class="btn btn-outline-dark">
                    <label id="labelMenu">
                        <img id="imgMenu" src="{{ asset('img/menu.png') }}">
                        <strong>Menu</strong>
                    </label></button>
                </div>
                <div class="col-lg-10" style="padding-right: 30px; text-align: right; padding-top: 10px">
                    <a href="home" style="text-decoration: none;"><h1 style="color: #370707"><i class="fa fa-home" aria-hidden="true"></i>Ovinotec</h1></a> 
                </div>
            </div>
        </header>

        <nav class="navMenu">
            <ul>
                <li><a href="#" id="animais">Animais</a>
                <ul class="itensAnimais">
                    <li><a href="acompanhamento">Acompanhamento</a>
                    <li><a href="#">Baixas</a>  
                    <li><a href="#">Cadastro</a>
                    <li><a href="#">Cobertura</a>    
                    <li><a href="#">Diagnóstico</a>
                    <li><a href="#">Lactação</a>    
                    <li><a href="#">Partos</a>
                    <li><a href="#">Pesagem Filhotes</a>   
                </ul>
                </li>
                <li><a href="#">Pesagem do leite</a></li>
            </ul>
        </nav>

        <main class="container-fluid" id="fundo">
            @yield('content')  
        </main>

    </div>
</body>
<script>
    $('#animais').click(function(){
        $('.navMenu ul .itensAnimais').toggleClass('mostra');
    });

    $('#abreMenu').click(function(){
        $('.navMenu').toggleClass('mostra');
    });
</script>
</html>