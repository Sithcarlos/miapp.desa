@extends('v1.layouts.main')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h2>Restaurantes</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Activo</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dRestaurantes as $rowres)
                    <tr>
                        <th scope="row"> {{ $rowres->id }} </th>
                        <td> {{ $rowres->nombre }} </td>
                        <td> {{ $rowres->descripcion }} </td>
                        <td> {{ $rowres->activo }} </td>
                    </tr>
                    @empty
                    <tr>
                        <th colspan="4"> <p class="text-center">NO HAY RESTAURANTES REGISTRADOS</p> </th>

                    </tr>

                    @endforelse


                </tbody>
            </table>
        </div>
    </div>
    <!--/row-->

</div>
@endsection
