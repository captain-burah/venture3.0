@extends('layouts.appLogin')

@section('content')
<div  
@isset($url)
    class="page-header header-filter purple-filter clear-filter bg-info" style="background-image: url('{{ asset('img/bg25.jpg')}}'); 
    background-size: cover; background-position:  center;"
@else 
    class="page-header header-filter bg-info"
    style="background-image: url('{{ asset('img/bg10.jpg')}}'); background-size: cover; background-position: top center;"
@endisset>
    <div class="container py-0 my-0">
        <div class="row col-md-12">
            <div class="pb-5 mb-5 pt-4 pt-4 bg-info"></div>
        </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto my-auto section-LecReg" id="LecReg">
            <div class="card my-auto">
              <!---------------------- SignUp Heading -------------------------------->

                <form class="form" method="POST" action='{{ url(app()->getLocale() . '/admin') }}' aria-label="{{ __('Login') }}">

                @csrf

                <div class="card-header card-header-warning text-center">
                    <h3 class="card-title mb-0 pb-0 font-weight-bold">
                        </i>&nbsp {{ __('Admin Login') }}
                    </h3>
                </div>
              <!--------------------- /SignUp Heading -------------------------------->  
    
              <!---------------------- SignUp Body -------------------------------->
                <div class="card-body col-md-12">

                    <!--  E-mail Address  -->
                    <div class="form-group-row">
                        <div class="form-group col-md-12 p-0">
                            <div class="input-group-prepend col-md-12 pt-0">
                                <span class="input-group-text pr-2"><i class="material-icons">mail</i></span>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                name="email" value="{{ old('email') }}" placeholder="{{ __('E-mail Address')}}" required autofocus>
                                
                            </div>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <!--  E-mail Address  -->

                    <!--  Password  -->
                    <div class="form-group-row">
                        <div class="form-group col-md-12 p-0">
                            <div class="input-group-prepend col-md-12 pt-0">
                                <span class="input-group-text pr-2"><i class="material-icons">lock_outline</i></span>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                name="password" placeholder="{{ __('Password')}}" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--  Password  -->


                    <!--  Remember Me  -->
                    <div class="form-group-row pl-2">
                        <div class="form-group col-md-12">
                            <div class="input-group-prepend col-md-12 pt-0">
                                <input class="form-check-input" type="checkbox" name="remember" 
                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                {{ __("Remember Me") }} 
                            </div>
                        </div>
                    </div>
                    <!--  Remember Me  -->


                    <div class="col-md-12 mx-auto text-center">
                            <button type="submit" class="btn btn-block btn-warning mb-3">
                                {{ __('Login') }}
                            </button>

                            <a class="text-primary" href="{{ route('admin-register-view', app()->getLocale()) }}">
                                <h5><b>{{ __('Create account') }}</b></h5>
                            </a>
                    </div>
                    <!--------------------- /SignUp Body -------------------------------->
                </form>
            </div>
        </div>
        </div>
    </div>
    <footer class=" col-12 mastfoot mt-auto mx-auto">
        <div class="inner mx-auto">
            <p>designed & developed | &copy <a href="//www.instagram.com/captain_burah" class="footer-a text-white">Captain Burah</a>. All rights reserved.</p>
            </div>
    </footer>
</div>
</div>
@endsection
