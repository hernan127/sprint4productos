@extends('layouts.app')

@section('content')

<!--/ Intro Single star /-->
<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Macetas</h1>
        </div>
      </div>

    </div>
  </div>
</section>
<!--/ Intro Single End /-->

<!--/ News Grid Star /-->
<section class="news-grid grid">
  <div class="container">
    <div class="row">

      <div class="offset-3">
          <h2>{{ $product->name }}</h2>
          <p>Descripción: {{ $product->description }}</p>
          <p>Precio: ${{ $product->price }}</p>
          <p>Stock: {{ $product->stock }} unidades.</p>
          @if($product->imageLoc != null)
          <img src="/storage/{{ $product->imageLoc }}" alt="Imagen del Producto">
          @endif
          <br>
          @if(auth()->user() && auth()->user()->role === 9)
          <a class="btn btn-warning" href="{{ url("products/$product->id/edit") }}">Editar Producto</a>
          @endif
          <br>
          <br>

          <a href="/products">Volver a Index de Productos</a>
      </div>
      <!-- <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
          <div class="img-box-b">
            <img src="img/ciro.jpg" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <div class="card-category-b">
                <a href="#" class="category-b">+ info</a>
              </div>
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="blog-single.html">Ciro</a>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
          <div class="img-box-b">
            <img src="img/nigel.jpg" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <div class="card-category-b">
                <a href="#" class="category-b">+ info</a>
              </div>
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="blog-single.html">Nigel</a>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
          <div class="img-box-b">
            <img src="img/kus.jpg" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <div class="card-category-b">
                <a href="#" class="category-b">+ info</a>
              </div>
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="blog-single.html">Kus</a>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
          <div class="img-box-b">
            <img src="img/hermes.jpg" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <div class="card-category-b">
                <a href="#" class="category-b">+ info</a>
              </div>
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="blog-single.html">Hermes</a>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-b card-shadow news-box">
          <div class="img-box-b">
            <img src="img/prince.jpg" alt="" class="img-b img-fluid">
          </div>
          <div class="card-overlay">
            <div class="card-header-b">
              <div class="card-category-b">
                <a href="#" class="category-b">+ info</a>
              </div>
              <div class="card-title-b">
                <h2 class="title-2">
                  <a href="blog-single.html">Prince</a>
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>

  </div>
</section>
<!--/ News Grid End /-->


@endsection
