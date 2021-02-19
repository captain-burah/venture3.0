@extends('layouts.appReg')

@section('content')
    <div class="container">
        <!---- Top Margin Spacing ---->
        <div class="row col-md-12">
            <div class="pb-5 mb-5 bg-info"></div>
        </div>
        <!---- Top Spacing ---->
        <div class="row col-md-12 ml-auto mr-auto">
            <!------ Right Pane ------>
            <div class="col-md-6 px-0 mx-auto section-regForm my-auto" id="regForm">
                <div class="card col-md-12">
                    <!---------------------- SignUp Heading -------------------------------->
                    <div class="card-header card-header-primary text-center ">
                        <h3 class="card-title mb-0 pb-0 font-weight-bold" >
                            {{ __('Admin Registration') }}
                        </h3>
                    </div>
                    <!--------------------- /SignUp Heading -------------------------------->  

                    <!---------------------- SignUp Body -------------------------------->
                    <div class="card-body px-3">
                        <form class="form" method="POST" id="adminForm" action="{{ url(app()->getLocale() . '/admin_reg') }}" 
                        aria-label="{{ __('Register')}}" name="studentForm"> 

                        @csrf

                        <div class="form-group-row">
                            <div class="form-row col-md-12 p-0">


                                <!--  First Name  -->
                                <div class="form-group col-md-6 pt-0">
                                    <input type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" 
                                    name="fname" placeholder="{{ __('First name') }}" value="{{ old('fname') }}" required autofocus>

                                    @if ($errors->has('fname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <!--  /First Name  -->




                                <!--  Last Name  -->
                                <div class="form-group col-md-6 pt-0">
                                    <input type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" 
                                    name="lname" placeholder="{{ __('Last name') }}" value="{{ old('lname') }}" required autofocus>

                                    @if ($errors->has('lname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <!--  /Last Name  -->
                            </div>
                        </div>




                        <!--  Email  -->
                        <div class="form-group p-0">
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                            name="email" placeholder="{{ __('Email address') }}"
                            autocomplete="" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <!--  /Email  -->




                        <div class="form-group row p-0">
                            <!--  Password  password & password_confirmation-->
                            <div class="col-md-6">
                                <input id="password" type="password" 
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                name="password" placeholder="{{ __("Password") }}" autocomplete="off" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <input id="password-confirmation" type="password" class="form-control" name="password_confirmation" 
                                placeholder="{{ __("Confirm Password") }}" required>
                            </div>
                            <!--  Password  -->
                        </div>
                        



                        <button type="submit" class="btn btn-block btn-success">
                        {{ __('Register') }}
                        </button>
                    </form>
                    </div>
                    <!--------------------- /SignUp Body -------------------------------->
                </div>
            </div>
             <!------ Right Pane ------>
        </div>
    </div>
@endsection