<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Checked') }}</title>
    <link rel="icon" href="images/checked.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/navigation.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};

    </script>
</head>
<body>

    <nav class="navbar navbar-default navbar-static-top" id="navigation" style="min-height:300px;">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12  " id="logoPlace">
            <form action="{{action('LanguageController@language')}}" method="post">
                {{csrf_field()}}
                <input type="text" value="{{Request::path()."/ge"}}" name="ge" hidden>
                <input type="image" src="images/ge.png" alt="georgian" class="img-responsive img-circle lang"  width="50px" name="ge" >
            </form>
            <form action="{{action('LanguageController@language')}}" method="post">
                {{csrf_field()}}
                <input type="text" value="{{Request::path()."/en"}}" name="en" hidden>
                <input type="image"  src="images/ukflag.png" alt="american" class="img-responsive img-circle lang" style="margin-left: 5px;" width="50px" name="en">
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

            <a href="{{route('welcome')}}"> <img src="images/logo main.png" alt="logo" title="logo" class="img-responsive center-block"></a>

        </div>
        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 ">



        </div>
        <div class="text-center col-md-10 col-lg-10  col-sm-10 col-xs-12  ">


            <div class="collapse navbar-collapse vertical-center "  id="app-navbar-collapse" >
                <!-- Right Side Of Navbar -->


                <ul class="nav navbar-nav  " style="margin-left: -18%;">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{route('home')}}">{{__('messages.home')}}</a></li>
                        <li><a href="{{route('home')}}">{{__('messages.contact_us')}}</a></li>
                        <li><a href="{{ route('login') }}">{{__('messages.sign_in')}}</a></li>
                        <li><a href="{{ route('register') }}">{{__('messages.sign_up')}}</a></li>
                    @else
                        <li ><a href="{{route('home')}}">{{__('messages.home')}}</a></li>
                        <li> <a href="{{route('home')}}">{{__('messages.contact_us')}}</a></li>
                        <li><a href="{{route('home')}}">{{__('messages.my_profile')}}</a></li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @yield('content')

    <footer>
        <div class="container "style="padding: 2%" >
           <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12" >
               <img src="images/checked.png" alt="checked" class="img-responsive center-block" >
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
                            <li ><a href="{{route('home')}}">{{__('messages.home')}}</a></li>
                            <li> <a href="{{route('home')}}">{{__('messages.contact_us')}}</a></li>
                            <li><a href="{{route('home')}}">{{__('messages.my_profile')}}</a></li>
                        </ul>
                        @endif
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

<script src="css/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>