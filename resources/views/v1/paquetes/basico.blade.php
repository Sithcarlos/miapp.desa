@extends('v1.layouts.restauranteBase')

@section('content')

<!---->
<div class="row mb-3">
    <div class="col-sm-12 pt-2 pb-2">
        <div class="accordion" id="accordionId">
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h4 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed color-azul-cppl" type="button"
                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            Haz click y descubre todo lo que podemos ofrecerte&nbsp;<i
                                class="fas fa-chevron-circle-down"></i>
                        </button>
                    </h4>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionId">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">

                            @forelse($dRestaurante['categorias'] as $cate)
                            <li class="list-group-item">
                                <a href="{{ Request::url().'#'.$cate['id'] }}" class="btn color-negro-cppl">
                                    <h5 class="text-left">
                                        <strong>
                                            {{ $cate['nombre'] }} &nbsp;<i class="fas fa-chevron-down"></i>
                                        </strong>
                                    </h5>
                                </a>
                            </li>
                            {{-- fin de datos --}}
                            @empty

                            <li class="list-group-item">
                                <a class="btn color-negro-cppl">
                                    <h5 class="text-left">
                                        <strong>
                                            No hay categorías&nbsp;<i class="fas fa-chevron-down"></i>
                                        </strong>
                                    </h5>
                                </a>
                            </li>

                            @endforelse




                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/row-->

<!--inicio categorias-->
@forelse($dRestaurante['categorias'] as $rowcat)
<div class="row mb-3 animate__animated animate__fadeIn animate__slower">
    <div id="{{ $rowcat['id'] }}" class="col-sm-12 mb-3 text-center">

        <h2 class="color-azul-cppl text-uppercase texto-encima">
            <strong> {{ $rowcat['nombre'] }} </strong>
        </h2>
        <h4 class="centrado">
            <em> {{ $rowcat['descripcion'] }} </em>
        </h4>
    </div>

    <!--inicio platillos-->
    @forelse($rowcat['platillos'] as $plats)
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-2">
        <div class="card border-0">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <h5 class="mt-0 mb-1">
                            <strong>
                                {{ $plats['nombre'] }}
                            </strong>
                        </h5>
                        <p>
                            <i>
                                {{ $plats['descripcion'] }}
                            </i>
                        </p>
                    </div>
                    <div class="ml-2">
                        <i class="color-gris-oscuro-cppl">
                            <strong class="responsive-media-cppl">
                                {{ ($plats['precio'])? ''.$plats['precio']: ''  }}
                            </strong>
                        </i>
                    </div>
                </div>
                @if( empty($plats['opciones']) == false )
                <!--inicio opciones-->
                <ul class="list-group list-group-flush">
                    @foreach( $plats['opciones'] as $opt )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <h6>
                            {{ $opt['opcion'] }}
                        </h6>
                        <i class="badge badge-pill responsive-media-cppl color-gris-oscuro-cppl">
                            {{ ($opt['precio'])? ''.$opt['precio']: ''  }}
                        </i>
                    </li>
                    @endforeach
                </ul>
                <!--fin opciones-->
                @endif
                @if( $plats['alergenos'] )
                <!--inicio alergenos-->
                <p class="text-info">
                    <strong>
                        Puede contener ingredientes alérgenos
                    </strong>
                    <i class="fas fa-allergies"></i>
                </p>
                <!--fin alergenos-->
                @endif

            </div>
            <!--/card-body-->
        </div>
        <hr />
    </div>
    @empty
    <p>No hay platillos</p>
    @endforelse
    <!--fin platillos-->

</div>
@empty
<p>No hay categorias</p>
@endforelse
<!--fin categorias-->

@endsection