@extends('adminlte::page')

@section('title', 'Materias - Enlaces')

@section('content_header')
    <h2 class="section_title">{{$materia}}</h2>
    <span class="section_subtitle">Enlaces</span>
@stop

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8737715429027255"
     crossorigin="anonymous"></script>
    </head>
    <body>

        <main class="main">
            @include('packPost.dataPack')
        </main>
        
   
        <footer class="footer">
            <div class="footer_bg">
                <div class="footer__content">
                <div class="footer_container container grid">
                    <div>
                        <h1 class="footer_title">Support <!-- <img src="imagenes/logo.png" alt="" class="footer__img"> --></h1>
                        <h1 class="footer_title">Aprende + <!-- <img src="imagenes/logo.png" alt="" class="footer__img"> --></h1>
                        <span class="footer_subtitle">#Estamos_para_ayudarte <br> #Cuenta_con_nosotros</span>            </div>
                    <ul class="footer_links">
                        <li>
                            <a href="#" class="footer_link">Inicio</a>
                        </li>
                        <li>
                            <a href="{{url('/postSemestres')}}#semestres" class="footer_link">Semestres</a>
                        </li>
                        <li>
                            <a href="{{url('/developers')}}" class="footer_link">Desarrolladores</a>
                        </li>
                    </ul>
                    <div class="footer_socials">
                        <a href="https://www.facebook.com/supportUAGRM" target="_blank" class="footer_social">
                            <i class="uil uil-facebook-f"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCz9Q7IBBcKw78nqP7V54WBA" target="_blank" class="footer_social">
                            <i class="uil uil-youtube"></i>
                        </a>
                        <a href="https://chat.whatsapp.com/IIZZdKyTiW03F9IOdDpTKZ" target="_blank" class="footer_social">
                            <i class="uil uil-whatsapp"></i>
                        </a>
                        <a href="https://t.me/joinchat/Cohi-d79IsViMGIx" target="_blank" class="footer_social">
                            <i class="uil uil-telegram-alt"></i>
                        </a>
                        
                    </div>
                </div>
            </div>
                <p class="footer_copy">&#169; SUPPORT. Todos los derechos Reservados</p>
            </div>
        </footer>
    
            <a href="#" class="scrollup" id="scroll-up">
                <i class="uil uil-arrow-up scrollup_icon"></i>
            </a>
    </body>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
@stop

@section('js')
<!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{asset('js/scroll.js')}}"></script>
@stop
