<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top" id="navigation">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12  " id="logoPlace">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <a href="/"> <img src="images/logo main.png" alt="logo" title="logo" class="img-responsive center-block"></a>

        </div>

        <div class="text-center col-md-12 col-lg-12  col-sm-12 col-xs-12 ">


            <div class="collapse navbar-collapse vertical-center"  id="app-navbar-collapse" >
                <!-- Right Side Of Navbar -->

                <ul class="nav navbar-nav ">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('home')}}">Contact Us</a></li>
                        <li><a href="{{ route('login') }}">Sign In</a></li>
                        <li><a href="{{ route('register') }}">Sign Up</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>


                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>



    @yield('content')

    <footer>
        <div class="container "style="padding: 2%" >
           <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12" >
               <img src="images/checked.png" alt="checked" class="img-responsive center-block" >
           </div>
            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                <div class="row">
                    <ul class="list-inline text-left">
                        <li><a href="">Home</a></li>
                        <li><a href="">Contuct Us</a></li>
                        <li><a href="">Sign In</a></li>
                        <li><a href="">Sign Up</a></li>
                    </ul>
                </div>
                <div class="row marg">
                    <ul class="list-inline text-center" id="listicon">
                        <li ><a href=""><img src="images/ficon.png" alt="facebok" class="img-responsive"></a></li>
                        <li ><a href=""><img src="images/ticon.png" alt="facebok" class="img-responsive"></a></li>
                        <li ><a href=""><img src="images/message.png" alt="facebok" class="img-responsive"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('js/app.js') }}"></script>
<script src="css/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>