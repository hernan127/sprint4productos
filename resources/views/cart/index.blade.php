@extends('layouts.app')
@section('content')

<section class="intro-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">Carrito</h1>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="news-grid grid">
  <div class="container">
    <div class="row">
<br>
<div class="offset-2 col-6">
    <br>
    @if($products !== null)
        @foreach($products as $product)
            <h5>{{ $product['name'] }}</h5>
            <h5>Precio: ${{ $product['price'] }}</h5>
            <a class="btn btn-info" href="/cart/remove/{{ $product['id'] }}">Quitar</a>
        <br>
        <br>
        @endforeach

    <br>
    <a class="btn btn-danger" href="/cart/flush">Vaciar Carrito</a>
    @else

    <div class="form-group row mb-0">
        <div class="col-12">
            <a href="/products" class="p_btn btn btn-info">
                {{ __('Agregar productos al carrito.') }}
            </a>
        </div>
    </div>

    @endif
</div>
</div>
</div>
</section>

@endsection
