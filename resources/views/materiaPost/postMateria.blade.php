@extends('adminlte::page')

@section('title', 'Materias')

@section('content_header')
@stop

@section('content')
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">MATERIAS</h2>
                </div>
                <div class="col-md-12" id="post-data">
                    @include('materiaPost.dataMateria')
                </div>
            </div>
        </div>
    </section>
    
    <div class="ajax-load text-center" style="display: none">
        <p> <img src="{{asset('imagenes/loader.gif')}}"/> Cargando más publicaciones </p>
    </div>

    <script>
        function loadMoreData(page){
            $.ajax({
                url:'?page=' + page,
                type:'get',
                beforeSend: function(){
                    $(".ajax-load").show();
                }
            })
            .done(function(data){
                if (data.html == " "){
                    $('.ajax-load').html("No se encontraron más publicaciones");
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR,ajaxOptions,thrownError){
                alert("El servidor no responde...");
            });
        }

        var page=1;
        $(window).scroll(function(){
            if ($(window).scrollTop() + $(window).height() >= $(document).height()){
                page++;
                loadMoreData(page);
            }
        });
    </script>
</body>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
