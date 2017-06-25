@extends('layouts.app')
@section('content')
<div class="container">
  <div class="rows">
    <div class="col-xs-12">
      <h1><center>Mr. Pizza ♥</center></h1><br><br>
      <center>
        @if(Auth::user()->admin())
          <a href="{{url('/products/create')}}"><button type="button" class="btn btn-primary">Crear producto</button></a>
          <a href="{{url('/categories/create')}}"><button type="button" class="btn btn-primary">Crear categoria</button></a>
          <br><br>
          <a href="{{url('/products')}}"><button type="button" class="btn btn-primary">Ver productos registrados</button></a>
          <a href="{{url('/categories')}}"><button type="button" class="btn btn-primary">Ver categorias registradas</button></a>
          <br><br>
          <a href="{{url('/categories')}}"><button type="button" class="btn btn-primary">Productos pendientes / Completados</button></a>
          <br><br>
        @else
          <a href="{{url('/products')}}"><button type="button" class="btn btn-danger">Consultar Productos</button></a>
          <a href="{{url('/addresses/create')}}"><button type="button" class="btn btn-danger">Registrar dirección</button></a>
        @endif
      </center>
    </div>
  </div>
</div>

@endsection
