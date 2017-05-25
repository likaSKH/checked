<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Checked') }}</title>
    <link rel="icon" href="{{asset('images/checked.png')}}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/panels.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};

    </script>
</head>
<body>

        <nav class="navbar navbar-default navbar-static-top" id="navigation" style="min-height: 250px">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12  " id="logoPlace">
                <div class="col-md-6">
                <form action="{{action('LanguageController@language')}}" method="post">
                    {{csrf_field()}}
                    <input type="text" value="{{Request::path()."/ge"}}" name="ge" hidden>
                    <input type="image" src="{{asset('images/ge.png')}}" alt="georgian" class="img-responsive img-circle lang"  width="30px" name="ge" >
                </form>
                <form action="{{action('LanguageController@language')}}" method="post">
                    {{csrf_field()}}
                    <input type="text" value="{{Request::path()."/en"}}" name="en" hidden>
                    <input type="image"  src="{{asset('images/ukflag.png')}}" alt="american" class="img-responsive img-circle lang" style="margin-left: 5px;" width="30px" name="en">
                </form>


                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                </div>

                <a href="{{route('home')}}" > <img src="{{asset('images/logo.png')}}" alt="logo" title="logo" class="img-responsive " style="padding-top: 6%"> </a>
            </div>


<div class="col-md-6">
                <div class="collapse navbar-collapse " id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right " style="margin: 0;padding-top: 15%">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">{{__('messages.sign_in')}}</a></li>
                            <li><a href="{{ route('register') }}">{{__('messages.sign_up')}}</a></li>
                            <li><a href="{{ route('home') }}">{{__('messages.contact_us')}}</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" >
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
            </div>
        </nav>

        @yield('content')
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    <footer>
        <div class="container "style="padding: 2%" >
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12" >
                <img src="{{asset('images/checked.png')}}" alt="checked" class="img-responsive center-block" >
            </div>
            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12">
                <div class="row">
                    @if(Auth::guest())
                        <ul class="list-inline text-left">
                            <li><a href="{{route('home')}}">{{__('messages.home')}}</a></li>
                            <li><a href="{{route('home')}}">{{__('messages.contact_us')}}</a></li>
                            <li><a href="{{ route('login') }}">{{__('messages.sign_in')}}</a></li>
                            <li><a href="{{ route('register') }}">{{__('messages.sign_up')}}</a></li>
                        </ul>
                    @else
                        <ul class="list-inline text-left" style="margin-left: 15%">
                            <li><a href="{{route('home')}}">{{__('messages.home')}}</a></li>
                            <li> <a href="{{route('home')}}">{{__('messages.contact_us')}}</a></li>
                            <li><a href="{{route('home')}}">{{__('messages.my_profile')}}</a></li>
                        </ul>
                    @endif
                </div>
                <div class="row marg">
                    <ul class="list-inline text-center" id="listicon">
                        <li ><a href=""><img src="{{asset('images/ficon.png')}}" alt="facebok" class="img-responsive"></a></li>
                        <li ><a href=""><img src="{{asset('images/ticon.png')}}" alt="facebok" class="img-responsive"></a></li>
                        <li ><a href=""><img src="{{asset('images/message.png')}}" alt="facebok" class="img-responsive"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

<script src="{{asset('css/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>