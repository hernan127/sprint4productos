<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gardenia') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('js/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">

                      <li class="mobile">
                        <a class="navbar-brand text-brand" href="index.php"> <img src="img/IsologoGardenia.png" class="img-fluid" alt=""> </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="/products">Productos</a>
                        <!-- <a class="nav-link" href="/macetas">Macetas</a> -->
                      </li>

                      <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Plantas</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#">Deco</a>
                      </li> -->

                      <li>
                        <a class="navbar-brand text-brand lg-viewport" href="/index.php"> <img src="{{ asset('img/IsologoGardenia.png') }}" class="img-fluid" alt=""> </a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="faqs.php">FAQ</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                      </li>

                      <li>
                        <a class="nav-link" href="">Contacto</a>
                      </li>

                      @if(auth()->user() && auth()->user()->role === 9)
                      <li class="nav-item">
                        <a class="nav-link" style="color:orange;" href="/backoffice">Administrar</a>
                      </li>
                      @endif
                        <!-- Authentication Links -->
                        <li class="nav-item">
                          <a class="nav-link" href="/cart">Carrito ({{ isset(session('cart')['products']) ? count(session('cart')['products']) : 0 }})</a>
                        </li>
                    </ul>


                </div>
            </div>
            @guest
                    <a class="login mr-1" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="login ml-1" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else

                    <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

            @endguest
        </nav>



        <main class="py-4">
            @yield('content')
        </main>

        <footer>
          <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="socials-a">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="copyright-footer">
                      <p class="copyright color-text-a">
                        &copy; Copyright
                        <span class="color-a">Gardenia</span> Todos los derechos reservados.
                      </p>
                    </div>

                  </div>
                </div>
              </div>
        </footer>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" ></script>



</body>
</html>
