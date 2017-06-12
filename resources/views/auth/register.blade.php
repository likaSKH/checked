@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center" style="min-height: 400px;color: #232424">
            <h1>Registration</h1>
            <div style="margin-top: 5%" class="text-center row">


                <div class="col-md-5 text-center blocks" id="individuals">
                    <i class="fa fa-user" aria-hidden="true" style="font-size: 4em"></i>
                    <h1>Individuals</h1>
                    <div class="underBorder" id="ind"></div>
                </div>

                <div class="col-md-5  text-center  blocks  " id="juridical" style="float: right">
                    <i class="fa fa-users" aria-hidden="true" style=" font-size: 4em"></i>
                    <h1>Corporation</h1>
                    <div class="underBorder" id="jur"></div>
                </div>


            </div>


            <div class="row ">
                <!--INDIVIDUALS-->
                <div id="ind-form">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <h2>{{__('register.register')}}
                                    <small id="smal">individuals</small>
                                </h2>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST"
                                      action="{{ route('register') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="name" type="text" class="form-control" name="name"
                                                   value="{{ old('name') }}" placeholder="{{__('register.name')}}"
                                                   required>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="lname" type="text" class="form-control" name="lname"
                                                   value="{{ old('lname') }}" placeholder="{{__('register.lname')}}"
                                                   required>

                                            @if ($errors->has('lname'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('birthDate') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="birthDate" type="date" class="form-control" name="birthDate"
                                                   value="{{ old('birthDate') }}"
                                                   placeholder="{{__('register.birthDate')}}" required>

                                            @if ($errors->has('birthDate'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('birthDate') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                        <div class="form-group text-left">
                                            <div class="col-md-8 col-md-offset-2 forms">
                                            <label for="gender">Gender: </label>
                                            <input id="gender" type="radio" class="radio-inline" name="gender" value="0">  Male
                                            <input id="gender" type="radio" class="radio-inline" name="gender" value="1">  Female
                                            </div>
                                        </div>

                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="phone" type="text" class="form-control" name="phone"
                                                   value="{{ old('phone') }}" placeholder="{{__('register.phone')}}"
                                                   required>

                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="address1" type="text" class="form-control" name="address1"
                                                   value="{{ old('address1') }}" placeholder="Address Line 1"
                                                   required>

                                            @if ($errors->has('address1'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('address1') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="address2" type="text" class="form-control" name="address2"
                                                   value="{{ old('address2') }}" placeholder="Address Line 2"
                                                   required>

                                            @if ($errors->has('address2'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('address2') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="city" type="text" class="form-control" name="city"
                                                   value="{{ old('city') }}" placeholder="{{__('register.city')}}"
                                                   required>

                                            @if ($errors->has('city'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="country" type="text" class="form-control" name="country"
                                                   value="{{ old('country') }}" placeholder="{{__('register.country')}}"
                                                   required>

                                            @if ($errors->has('country'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


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


                <!--CORPORATION-->

                <div id="jur-form" hidden>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <h2>{{__('register.register')}}
                                    <small id="smal">corporation</small>
                                </h2>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="POST"
                                      action="{{ route('register') }}">
                                    {{ csrf_field() }}


                                    <div class="form-group{{ $errors->has('resPersonName') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="resPersonName" type="text" class="form-control"
                                                   name="resPersonName"
                                                   value="{{ old('resPersonName') }}"
                                                   placeholder="{{__('register.resPersonName')}}"
                                                   required>

                                            @if ($errors->has('resPersonName'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('resPersonName') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('resPersonLName') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="resPersonLName" type="text" class="form-control"
                                                   name="resPersonLName"
                                                   value="{{ old('resPersonLName') }}"
                                                   placeholder="{{__('register.resPersonLName')}}"
                                                   required>

                                            @if ($errors->has('resPersonLName'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('resPersonLName') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group text-left">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <label for="genderJ">Gender: </label>
                                            <input id="genderJ" type="radio" class="radio-inline" name="genderJ" value="1">  Male
                                            <input id="genderJ" type="radio" class="radio-inline" name="genderJ" value="2">  Female
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('companyName') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="companyName" type="text" class="form-control" name="companyName"
                                                   value="{{ old('companyName') }}"
                                                   placeholder="{{__('register.companyName')}}" required>

                                            @if ($errors->has('companyName'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('companyName') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="position" type="text" class="form-control" name="position"
                                                   value="{{ old('position') }}"
                                                   placeholder="{{__('register.position')}}" required>

                                            @if ($errors->has('position'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('bphone') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="bphone" type="text" class="form-control" name="bphone"
                                                   value="{{ old('bphone') }}" placeholder="{{__('register.phone')}}"
                                                   required>

                                            @if ($errors->has('bphone'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('bphone') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('companyAddress1') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="companyAddress1" type="text" class="form-control"
                                                   name="companyAddress1"
                                                   value="{{ old('companyAddress1') }}" placeholder="companyAddress1"
                                                   required>

                                            @if ($errors->has('companyAddress1'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('companyAddress1') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('companyAddress2') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="companyAddress2" type="text" class="form-control"
                                                   name="companyAddress2"
                                                   value="{{ old('companyAddress2') }}" placeholder="companyAddress2"
                                                   required>

                                            @if ($errors->has('companyAddress2'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('companyAddress2') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('businessCity') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="businessCity" type="text" class="form-control"
                                                   name="businessCity"
                                                   value="{{ old('businessCity') }}"
                                                   placeholder="{{__('register.city')}}"
                                                   required>

                                            @if ($errors->has('city'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('businessCountry') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms">
                                            <input id="businessCountry" type="text" class="form-control"
                                                   name="businessCountry"
                                                   value="{{ old('businessCountry') }}"
                                                   placeholder="{{__('register.businessCountry')}}"
                                                   required>

                                            @if ($errors->has('businessCountry'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('businessCountry') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="col-md-8 col-md-offset-2 forms ">
                                            <input id="emailJur" type="" class="form-control" name=""
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
                                            <input id="passwordJur" type="" class="form-control" name=""
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
                                            <input id="passwordJur-confirm" type="" class="form-control"
                                                   name="" placeholder="{{__('register.confirm')}}"
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
        </div>
    </div>
@endsection
