@extends('layouts.app')
@section('content')
<div class="container">
  <div class="rows">
    <h1><center>CATEGORIAS</center></h1><br><br>
    @foreach ($categories as $category)
    <div class="col-md-4">
      <h2>{{$category->id}}</h2>
      <h2>{{$category->name}}</2>
      <p>{{$category->description}}
        @include('categories.delete',['category'=>$category])
        <a class="btn btn-success" href="{{url('/categories/'.$category->id).'/edit'}}">Editar</a>
      </div>
    @endforeach
    </p><br>
  </div>
</div>
<div class="container">
  <a href="{{ url('/home') }}">Home</a>
</div>
@endsection
