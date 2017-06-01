@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center" style="min-height: 400px;color: #232424">
        <h1>Registration</h1>
        <div style="margin-top: 5%" class="text-center row">

        <button class="col-md-5  text-center  blocks" data-toggle="collapse" data-target="#juridical" >
             <i class="fa fa-users" aria-hidden="true" style="font-size: 4em" ></i>
            <h1>Corporation</h1>
        </button>

        <button class="col-md-5 text-center blocks " style="float: right" data-toggle="collapse" data-target="#individuals" >
            <i class="fa fa-user" aria-hidden="true" style="font-size: 4em"></i>
            <h1>Individuals</h1>
        </button>
        </div>

<!--
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h2>{{__('register.register')}}</h2></div>
                <div class="panel-body">





                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 forms">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{__('register.name')}}" required autofocus>
                                                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                             <div class="col-md-8 col-md-offset-2 forms">
                                <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" placeholder="{{__('register.lname')}}" required >

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('birthDate') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 forms">
                                <input id="birthDate" type="date" class="form-control" name="birthDate" value="{{ old('birthDate') }}" placeholder="{{__('register.birthDate')}}" required >

                                @if ($errors->has('birthDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 forms">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="{{__('register.phone')}}" required >

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 forms">
                                <input id="position" type="text" class="form-control" name="position" value="{{ old('position') }}" placeholder="{{__('register.position')}}" required >

                                @if ($errors->has('position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 forms">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="{{__('register.city')}}" required >

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 forms">
                                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" placeholder="{{__('register.country')}}" required >

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('juridical') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 forms">
                                <input id="juridical" type="checkbox" class="checkbox " style="float: left" name="juridical" value="1" required >{{__('register.juridical')}}

                                @if ($errors->has('juridical'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('juridical') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-8 col-md-offset-2 forms ">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{__('login.email')}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           <div class="col-md-8 col-md-offset-2 forms">
                                <input id="password" type="password" class="form-control" name="password" placeholder="{{__('login.password')}}" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2 forms">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="{{__('register.confirm')}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn submitButtons col-md-12 col-xs-12 col-sm-12">
                                    {{__("register.register")}}
                                </button>
                            </div>
                        </div>
                    </form>



</div>
        </div>
                </div>-->
        <div class="row bg-danger " >
            <div id="juridical" class="collapse">
                juridical
            </div>

            <div id="individuals" class="collapse" >
                individuals
            </div>
        </div>
    </div>


</div>
@endsection
