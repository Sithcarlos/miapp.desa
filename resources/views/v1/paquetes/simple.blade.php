@extends('v1.layouts.restauranteBase')

@section('content')


@forelse($dRestaurante['categorias'] as $cate)
<!---->
<div class="text-center">

    <img src="{{URL::asset( $cate['imagen_ruta'] )}}" class="img-fluid mb-2" alt="menu">

</div>
@empty
<p>No hay usuarios</p>
@endforelse

@endsection