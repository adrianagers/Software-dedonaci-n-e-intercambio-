<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ asset('js/time.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">

    <link rel="icon" href="img/logos/MariposaSolaSinFondo.jpg">
    
    <title>Zloty - Principal</title>

</head>

<body style="background-color:#27292D;">

    <header>


    <!----------- menu principal --------- -->

        <nav id="menu" class="navbar navbar-expand-lg fixed-top bg-pink">
            <div class="container">
                <a class="navbar-brand" href="{{route('/')}}">
                    <img src="{{ asset('img/logos/MariposaConLetraBlanca.png') }}" alt="logozlotyMariposa"  width="100%" style="margin-top:-40px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <ul class="nav nav-pills nav-fill">
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: center;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="i">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <a class="nav-link btn btn-link" href="{{route('knowUs')}}" style="color: #ffffff;">
                                Conocenos</a>
                        </li>
                        <li class="nav-item">
                                <div class="i">
                                    <i class="fas fa-user"></i>
                                </div>
                            <a class="nav-link btn btn-link" href="{{ route('login') }}" style="color: #ffffff;">
                                Iniciar Sesi??n</a>
                        </li>
                        <li class="nav-item">
                                <div class="i">
                                    <i class="fas fa-registered"></i>
                                </div>
                            <a class="nav-link btn btn-link" href="{{ route('register') }}" style="color: #ffffff;">
                                Registrate!</a>
                        </li>
                            </div>
                        </li>
                    </ul>
                </div>
                </ul>
            </div>
        </nav>
<!-- carrusel de imagenes  -->

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item height-carousel active">
                    <img src="img/carrusel3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item height-carousel ">
                    <img src="img/carrusel2c.jpg" class="d-block w-80" alt="...">
                </div>                
                <div class="carousel-item height-carousel">
                    <img src="img/carrusel4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

    <!-------- Cuadro que Acompa??a el Carrusel -------------->

        <div class="contenedorletras">
            <h1>Unete a Zloty para que sea mas Eficiente</h1>
            <h6>Puedes clasificar tus productos para una mayor busqueda a lo que tu necesites.</h6>
                <a class="colorprincipal" href="{{ route('login') }}"><i class="fas fa-user-circle"></i>
                    Para Clasificar las Categorias debes Iniciar Sesi??n</a>
        </div>

    <!---------smoon ola  de la pagina  ----- -->

        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #27292D;"></path>
            </svg></div>
    </header>

    <!-- Tarjeta -->

    <div class="mb-3 container" style="background-color:#fffff">
        <img src="img/mensajero2.png" class="imagencuadro" alt="Equipo Zloty" height="70px">
        <div class="card-body">
            <h1 class="card-title titulocuadro">Zloty</h31>
            <p class="card-text frasecuadro" >Nuestro equipo cumpliendo con todas las espectativas de la Fundaci??n Bella Flor, dando nuestra mejor
                    calidad y eficiencia a todo lo que se nos a sea aignado, tambien ayudando facilidades al cliente en todo lo que sea posible.</p>
        </div>
    </div>


        <center>
            <a class="btn btn-outline-light" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Ver video
              </a>
        </center>

        <div class="collapse" id="collapseExample">
            <nav class="navvideo" > 
                <center>
                <video controls="controls" width="80%" poster="video/miniatura.png" >
                    <source src="video/videoprincipal.mp4" type="video/mp4" class="videoprincipal"></sourse>
                </video>
                </center>
            </nav>
        </div>       

        <center><h1 class="tituloPortafolio">PORTAFOLIO</h1></center>
    </div>

    <!--------- secccion del card ------------ -->


    <div class="mb-3 container">
        <div class="card-body">
            <h1 class="card-text frasecuadro-3">??Quieres ver todos los objetos e implementos donados?</h1>
            <p class="card-text frasecuadro-2">Por favor inicia sesion o registrate para ver todo el contenido del Portafolio.</p>
        </div>
    </div>


    <!-- Redes Sociales de la Fundacion -->



    
    @include('layouts.plantilla.footer')

</body>

</html>