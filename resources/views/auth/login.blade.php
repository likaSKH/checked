@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default ">
                <div class="panel-heading"><h2>{{__('login.login')}}</h2></div>
                <div class="panel-body  ">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                            <div class="col-md-8 col-md-offset-2 ">
                                <div class="inner-addon left-addon forms" >
                                    <i class="fa fa-user spanstyle " aria-hidden="true"></i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{__('login.email')}}" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                            <div class="col-md-8 col-md-offset-2 ">
                                <div class="inner-addon left-addon forms">
                                <i class="fa fa-lock spanstyle"></i>
                                <input id="password" type="password" class="form-control" name="password" placeholder="{{__('login.password')}}" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn submitButtons  col-md-12 col-xs-12 col-sm-12">
                                    {{__('login.login')}}
                                </button>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                        <div class="checkbox" style="float: left">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{__('login.remember')}}
                            </label>
                        </div>
                        <a class="btn btn-link" href="{{ route('password.request') }}" style="float: right">
                            {{__('login.forgot')}}
                        </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
