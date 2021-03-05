@extends('v1.layouts.main')

@section('content')
<div class="container">
    <div class="row mb-1">
        <div class="col-12">
            FORMULARIO PARA EDITAR
            {{ $id }}
        </div>
    </div>
    <!--/row-->
    <div class="row mb-1">
        <div class="col-1">

        </div>
        <div class="col-10">
            <form method="post" action="{{url('restaurantes', ['id' => $id])}}" accept-charset="UTF-8">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{ $id }}">
                <div class="form-group">
                    <label for="InputNombreRes">Nombre del restaurante</label>
                    <input value="{{ $info['restaurante']->nombre }}" name="nombre" type="text" class="form-control"
                        id="InputNombreRes" aria-describedby="NombreResHelp">
                    <small id="NombreResHelp" class="form-text text-muted">Se mostrara al público</small>
                </div>
                <div class="form-group">
                    <label for="InputDescripcion">Slogan</label>
                    <input value="{{ $info['restaurante']->descripcion }}" name="descripcion" type="text"
                        class="form-control" id="InputDescripcion" aria-describedby="DescripcionHelp">
                    <small id="DescripcionHelp" class="form-text text-muted">Se mostrara al público</small>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div class="col-1">

        </div>
    </div>
    <!--/row-->
    <div class="row mb-1">
        <div class="col-12">
            Listado de Categorías
        </div>
    </div>
    <!--/row-->
    <div class="row mb-1">
        <div class="col-1">
        </div>
        <div class="col-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse( $info['categorias'] as $rowcat)
                    <tr>
                        <th scope="row"> {{ $rowcat->id }} </th>
                        <td> {{ $rowcat->nombre }} </td>
                        <td> {{ $rowcat->descripcion }} </td>
                        <td> img </td>
                        <td>
                            <a href="{{ url('/categorias/'.$rowcat->id) }}" type="button"
                                class="btn btn-warning btn-sm">Editar</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <th colspan="5">
                            <p class="text-center">NO HAY CATEGORIAS REGISTRADOS</p>
                        </th>

                    </tr>

                    @endforelse

                </tbody>
            </table>
        </div>
        <div class="col-1">
        </div>
    </div>
    <!--/row-->
</div>
@endsection