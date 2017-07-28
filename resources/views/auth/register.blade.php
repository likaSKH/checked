@extends('layouts.app')

@section('content')
    <div class="container">



        <div class="col-md-6">
            <div class="row ">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h2>{{__('register.register')}}
                            </h2>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ route('register') }}">
                                {{ csrf_field() }}






                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-md-8 col-md-offset-2 forms ">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}" placeholder="{{__('login.email')}}"
                                               required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="col-md-8 col-md-offset-2 forms">
                                        <input id="password" type="password" class="form-control" name="password"
                                               placeholder="{{__('login.password')}}" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2 forms">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" placeholder="{{__('register.confirm')}}"
                                               required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                        <button type="submit"
                                                class="btn submitButtons col-md-12 col-xs-12 col-sm-12">
                                            {{__("register.register")}}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-md-6">
            <div class="row ">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class=" text-capitalize slogan text-center" style="color: #232424;">simple as that!</h1>

                <div class="col-md-12">
                    <div class="tree ">

                        <ul style="height: 100px; margin-top: 54%">
                            <li>
                                <a href="/">Visit Us</a>
                                <ul>
                                    <!--    <li>
                                        <a href="#">Child</a>
                                        <ul>
                                            <li>
                                                <a href="#">Grand Child</a>
                                            </li><li>
                                                <a href="#">Grand Child</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Grand Child</a>
                                                    </li><li>
                                                        <a href="#">Grand Child</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    -->
                                    <li>
                                        <a href="#">Find Out Benefits</a>
                                        <ul>
                                            <li>
                                                <a href="#">Sign Up</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Activate Account</a>
                                                    </li>
                                                </ul>
                                            </li>


                                        </ul>

                                        <li>
                                        <a href="#">Sign In</a>
                                        </li>

                                    </li>
                                </ul>
                            </li>
                        </ul>

                </div>
                </div>
            </div>

        </div>

    </div>
    </div>
@endsection
