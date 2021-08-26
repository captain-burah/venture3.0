@extends('student.stuLayout')

@section('stuContent')
  
  <student-dashboard
    logout_user="{{ route('logout', app()->getLocale()) }}"
    tutor_img="{{ asset('img/user1.png')}}"
    home_student="{{ url(app()->getLocale() . '/home_tutor') }}"
    locale="{{ app()->getLocale() }}"
    link-en="{{ route(Route::currentRouteName(), 'en') }}"
    link-sn="{{ route(Route::currentRouteName(), 'sn') }}"
  ></student-dashboard>

@endsection