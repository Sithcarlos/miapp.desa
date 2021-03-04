<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8" />
        <title>Enunclick</title>
        <base href="/" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    </head>

    <body>
        <div id="top" class="container-fluid">
            <div class="ml-2 mr-2 animate__animated animate__fadeIn animate__slower">
                @if( $dRestaurante['activo'] )

                <div >
                    <nav class="navbar navbar-expand-md navbar-light bg-light">
                        <p class="navbar-brand">
                            <img src="{{URL::asset( $dRestaurante['imagen_ruta'] )}}" alt="logo"  class="img-fluid" alt="dataRestaurante.imagen.alt" loading="lazy">
                        </p>
                        <div class="collapse navbar-collapse">
                            <h1 class="p-2">
                                {{ $dRestaurante['nombre'] }}
                            </h1>

                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <h4 class="pl-2">
                                          {{ $dRestaurante['descripcion'] }}
                                       
                                    </h4>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <main class="container ">
                        @yield('content')
                    </main>
                   
                    <div class="row mb-3">
                        <div class="col-sm-12 text-right pr-4">
                            <a href="{{ Request::url() }}#top" class="btn color-azul-cppl flotante">
                                <h3>
                                    <i class="fas fa-chevron-up"></i>
                                </h3>
                            </a>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                @else
                <div  class="row mb-3">
                    <div class="col-sm-12 text-center mt-2">
                        <h2 class="">
                            El menú digital no esta disponible o la dirección URL esta escrita diferente
                        </h2>
                        <h3>~~~</h3>
                    </div>
                </div>
                @endif

                <div  class="row mb-3">
                    <div class="col-sm-12">
                        <h6 class="text-center">
                            <a href="https://axti.net" class="color-negro-cppl">
                                Desarrollado por <strong>AXTI Group</strong>
                            </a>
                        </h6>
                    </div>
                </div>
                <!--/row-->
            </div>
        </div>

        <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script  src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>    
    <script  src="{{ asset('js/popper.min.js') }}"></script>
    <script  src="{{ asset('js/bootstrap.min.js') }}"></script>
     
        <script src="https://kit.fontawesome.com/9367a98c2d.js" crossorigin="anonymous"></script>
    </body>

</html>