@extends('layouts.app')
@section('content')
@if(Auth::user()->admin())
  {!!Form::open(['url' => '/products/','files'=>'true','method' => 'POST', 'class' => 'inline-block']) !!}

    Nombre del producto:
    {{  Form::text('name','',['class'=>'form-control'])  }}
    Descripción del producto:
    {{  Form::textarea('description','',['class'=>'form-control'])  }}
    Precio del producto:
    {{  Form::number('price','',['class'=>'form-control'])  }}
    Categoría del producto:
    {{  Form::select('category_id',$categories,['class'=>'form-control'])  }}<br><br>
    Ingrese imagen:
    {!! Form::file('image') !!}

  <input type="submit" class="btn btn-success" value="Guardar">
  {!! Form::close() !!}
  @else
    <h1>no puede acceder a este contenido</h1>
    <a href="{{ url('/home') }}">Home</a>
  @endif
@endsection
