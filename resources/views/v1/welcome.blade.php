@extends('v1.layouts.main')

@section('content')
contenido inicial bienvenida..
<div class="">
    @guest
    <!-- Visitante -->
    Visitante
    @else
    <!-- Usuario Logueado -->
    Logueado
    @endguest
</div>
@endsection
