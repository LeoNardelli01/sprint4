@extends('layouts.app')

@section('content')

  <div class="flecha-bajar text-center fixed-bottom">
      <a href="">
          <i class="fa fa-angle-down" aria-hidden="true"></i>
      </a>
  </div>

  <div class="cabecera">
    <div class="container text-center">
      <h1 class="text-white display-4">Hugo Sajama</h1>
      <h3 class="text-white display-7">Tienda Oficial</h3>
    </div>

    <div id="div-video" class="">
      <video autoplay muted loop>
          <source src="videos/secuencia.mp4" type="video/mp4">
      </video>
    </div>
  </div>

  <div id="seccion-1" class="seccionUno">
    <div class="container text-center text-light">
      <h2 class="display-4">Ofertas Imperdibles</h2>
      <p class="">Esta navidad no te quedes sin tus regalos!</p>
      <p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna.<p>
    </div>
  </div>

  <div class="parallaxUno">
    <div class="container">
      <div id="parallaxUno" class="row text-center text-light">
        <div class="col-xs-12 col-sm-6 secciones">
          <h3>Kids</h3>
          <h3>Otoño-Invierno</h3>
          <h3>Primavera-Verano</h3>

        </div>
        <div class="col-xs-12 col-sm-6 text-light secciones">
          <h3>Hombre</h3>
          <h3>Mujer</h3>
          <h3>Accesorios</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="ofertas text-center">
    <h2>Ofertas Imperdibles!</h2>
    <div class="row">

      <div class="col-xs-6 col-sm-6 col-xl-3">
        <article class="articuloUno">
            <div class="card">
              <img class="card-img-top" src="images/foto1.png" alt="Imagen producto uno" >
              <div class="card-body">
                <h4 class="card-title">Producto 1</h4>
                <p class="card-text">
                  un poco de explicacion del articulo
                </p>
                <a href="#" class="btn btn-primary">Lo quiero!</a>
              </div>
            </div>
          </article>
      </div>

      <div class="col-xs-6 col-sm-6 col-xl-3">
        <article class="articuloDos">
            <div class="card">
              <img class="card-img-top" src="images/foto2.png" alt="Imagen producto uno" >
              <div class="card-body">
                <h4 class="card-title">Producto 1</h4>
                <p class="card-text">
                  un poco de explicacion del articulo
                </p>
                <a href="#" class="btn btn-primary">Lo quiero!</a>
              </div>
            </div>
        </article>
      </div>

      <div class="col-xs-6 col-sm-6 col-xl-3">
        <article class="articuloTres">
            <div class="card">
              <img class="card-img-top" src="images/foto3.png" alt="Imagen producto uno" >
              <div class="card-body">
                <h4 class="card-title">Producto 1</h4>
                <p class="card-text">
                  un poco de explicacion del articulo
                </p>
                <a href="#" class="btn btn-primary">Lo quiero!</a>
              </div>
            </div>
        </article>
      </div>

      <div class="col-xs-6 col-sm-6 col-xl-3">
        <article class="articuloCuatro">
            <div class="card">
              <img class="card-img-top" src="images/foto4.png" alt="Imagen producto uno" >
              <div class="card-body">
                <h4 class="card-title">Producto 1</h4>
                <p class="card-text">
                  un poco de explicacion del articulo
                </p>
                <a href="#" class="btn btn-primary">Lo quiero!</a>
              </div>
            </div>
        </article>
      </div>

    </div><!--fin primer row -->


    <div class="row">

      <div class="col-xs-6 col-sm-6 col-xl-3">
        <article class="articuloCinco">
            <div class="card">
              <img class="card-img-top" src="images/foto4.png" alt="Imagen producto uno" >
              <div class="card-body">
                <h4 class="card-title">Producto 1</h4>
                <p class="card-text">
                  un poco de explicacion del articulo
                </p>
                <a href="#" class="btn btn-primary">Lo quiero!</a>
              </div>
            </div>
        </article>
      </div>

      <div class="col-xs-6 col-sm-6 col-xl-3">
        <article class="articuloSeis">
            <div class="card">
              <img class="card-img-top" src="images/foto1.png" alt="Imagen producto uno" >
              <div class="card-body">
                <h4 class="card-title">Producto 1</h4>
                <p class="card-text">
                  un poco de explicacion del articulo
                </p>
                <a href="#"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                <a href="#" class="btn btn-primary">Lo quiero!</a>
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
              </div>
            </div>
        </article>
      </div>

      <div class="col-xs-6 col-sm-6 col-xl-3">
        <article class="articuloSiete">
            <div class="card">
              <img class="card-img-top" src="images/foto2.png" alt="Imagen producto uno" >
              <div class="card-body">
                <h4 class="card-title">Producto 1</h4>
                <p class="card-text">
                  un poco de explicacion del articulo
                </p>
                <a href="#" class="btn btn-primary">Lo quiero!</a>
              </div>
            </div>
        </article>
      </div>

      <div class="col-xs-6 col-sm-6 col-xl-3">
        <article class="articuloOcho">
            <div class="card">
              <img class="card-img-top" src="images/foto1.png" alt="Imagen producto uno" >
              <div class="card-body">
                <h4 class="card-title">Producto 1</h4>
                <p class="card-text">
                  un poco de explicacion del articulo
                </p>
                <a href="#" class="btn btn-primary">Lo quiero!</a>
              </div>
            </div>
        </article>
      </div>
    </div> <!-- Fin segundo ROW-->
  </div>

<!-- CARROUSEL (ubicar todo en INCLUDES)-->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="images/bannerProd.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/bannerUno.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/bannerDos.png" alt="Third slide">
    </div>
  </div>
</div>

@endsection
