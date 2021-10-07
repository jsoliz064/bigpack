@extends('adminlte::page')

@section('title', 'Support - Aprende +')

@section('content_header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Support</title>
@stop

@section('content')
        

    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav_logo">Support</a>
                <div class="nav_btns">
                    <i class="uil uil-moon change-theme" id="theme-button"></i>
                </div>
            </nav>
        </header>
        <main>
            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
             <h2 class="section_title">
                 Desarrolladores
                 <img src="imagenes/logo.png" alt="" class="semestres__img">
                </h2>
             <span class="section_subtitle">Acerca de nosotros</span> 
             <div class="about_container container grid">
                 <div class="home_img">
                     <svg class="home_blob"viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                         <mask id="mask0" mask-type="alpha">
                             <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                             130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                             97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                             0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                         </mask>
                         <g mask="url(#mask0)">
                             <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                             165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                             129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                             -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
         
                             <image class="home_blob-img" x='12' y='18' xlink:href="imagenes/IMG_2941.png"/>
                         </g>
                     </svg>                 
         
                 </div>
                 <!-- <img src="./img/ESTO.png" alt="" class="about_img"> -->
                 <div class="about_data">
                     <h1 class="desa_title">Fernando</h1>
                     <span class="desa_subtitle">Frontend-Developer</span>
                     <p class="about_description">Estudiante de la Carrera de Ingeniera en Redes y Telecomunicaciones 
                         de la Universidad Autonoma Gabriel Rene Moreno</p>
                     
                     <div class="about_buttons">
                         <a href="http://wa.me//+59173665042" class="button button--flex">
                             Contactame<i class="uil uil-message button_icon"></i>
                         </a>
                     </div>
                 </div>
             </div>
         
             <div class="about_container container grid">
                 <div class="home_img">
                     <svg class="home_blob"viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                         <mask id="mask0" mask-type="alpha">
                             <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                             130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                             97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                             0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                         </mask>
                         <g mask="url(#mask0)">
                             <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                             165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                             129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                             -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
         
                             <image class="home_blob-img" x='12' y='18' xlink:href="imagenes/Daniel.png"/>
                         </g>
                     </svg>                 
         
                 </div>
                <!--  <img src="./img/PicsArt_09-24-12.28.24.jpg" alt="" class="about_img"> -->
                 <div class="about_data">
                     <h1 class="desa_title">Jose Daniel</h1>
                     <span class="desa_subtitle">Backend-Developer </span>
                     <p class="about_description">Estudiante de la Carrera de Ingeniera en Sistemas 
                         de la Universidad Autonoma Gabriel Rene Moreno</p>
                     
                     <div class="about_buttons">
                         <a href="http://wa.me//+59169086228" class="button button--flex">
                             Contactame<i class="uil uil-message button_icon"></i>
                         </a>
                     </div>
                 </div>
             </div>
         
             <div class="about_container container grid">
                 <div class="home_img">
                     <svg class="home_blob"viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                         <mask id="mask0" mask-type="alpha">
                             <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                             130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                             97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                             0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                         </mask>
                         <g mask="url(#mask0)">
                             <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                             165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                             129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                             -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
         
                             <image class="home_blob-img" x='12' y='18' xlink:href="imagenes/Harold ci.png"/>
                         </g>
                     </svg>                 
         
                 </div>
                 <!-- <img src="./img/WhatsApp Image 2021-10-05 at 09.23.29.jpeg" alt="" class="about_img"> -->
                 <div class="about_data">
                     <h1 class="desa_title">Harold</h1>
                     <span class="desa_subtitle">Backend-Developer </span>
                     <p class="about_description">Estudiante de la Carrera de Ingeniera en Sistemas
                         de la Universidad Autonoma Gabriel Rene Moreno</p>
                     
                     <div class="about_buttons">
                         <a href="http://wa.me//+59171190290" class="button button--flex">
                             Contactame<i class="uil uil-message button_icon"></i>
                         </a>
                     </div>
                 </div>
             </div>
         
             <div class="about_container container grid">
                 <div class="home_img">
                     <svg class="home_blob"viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                         <mask id="mask0" mask-type="alpha">
                             <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                             130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                             97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                             0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                         </mask>
                         <g mask="url(#mask0)">
                             <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                             165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                             129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                             -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
         
                             <image class="home_blob-img" x='12' y='18' xlink:href="{{asset('imagenes/darwin.png')}}"/>
                         </g>
                     </svg>                 
         
                 </div>
                 <div class="about_data">
                     <h1 class="desa_title">Darwin</h1>
                     <span class="desa_subtitle">Backend-Developer </span>
                     <p class="about_description">Estudiante de la Carrera de Ingeniera Informatica 
                         de la Universidad Autonoma Gabriel Rene Moreno</p>
                     
                     <div class="about_buttons">
                         <a href="http://wa.me//+59172182712" class="button button--flex">
                             Contactame<i class="uil uil-message button_icon"></i>
                         </a>
                     </div>
                 </div>
             </div>
         </section>
         </main>


        <!--==================== SCROLL TOP ====================-->
            <a href="#" class="scrollup" id="scroll-up">
                <i class="uil uil-arrow-up scrollup_icon"></i>
            </a>
    </body>
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<!--==================== CSS ====================-->
    <link rel="stylesheet" href="./css/styles.css">

    <link rel="shortcut icon" href="./img/logo.png" />
@stop

@section('js')
<!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{asset('js/main.js')}}"></script>
@stop