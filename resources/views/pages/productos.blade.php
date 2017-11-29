@extends('layouts.app')

@section('content')
ß
  <style media="screen">
    .card img {
      width: 100px;
      .ß
    }
  </style>

  <div class="container">
    <div class="banner">
      <img src="/images/banner.jpg" alt="Banner" class="img-thumbnail">
    </div>
  </div>


  <div class=" container row">

    <div class="col-md-4 card img-thumbnail">
      <img class="card-img-top" src="/images/foto1.png" alt="Foto Producto 1">
      <div class="card-body">
        <h4 class="card-title">Articulo 1</h4>
        <p class="card-text">
          Descrfipcion del articulo, en lo posible que sean
          dos lineas
        </p>
        <a href="#!" class="btn btn-alert">Comprar</a>
      </div>
    </div>

    <div class="col-md-4 card img-thumbnail">
      <img class="card-img-top" src="/images/foto1.png" alt="Foto Producto 1">
      <div class="card-body">
        <h4 class="card-title">Articulo 1</h4>
        <p class="card-text">
          Descrfipcion del articulo, en lo posible que sean
          dos lineas
        </p>
        <a href="#!" class="btn btn-alert">Comprar</a>
      </div>
    </div>

    <div class="col-md-4 card img-thumbnail">
      <img class="card-img-top" src="/images/foto1.png" alt="Foto Producto 1">
      <div class="card-body">
        <h4 class="card-title">Articulo 1</h4>
        <p class="card-text">
          Descrfipcion del articulo, en lo posible que sean
          dos lineas
        </p>
        <a href="#!" class="btn btn-alert">Comprar</a>
      </div>
    </div>
  </div>


@endsection
