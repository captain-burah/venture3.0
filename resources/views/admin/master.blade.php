@extends('admin.layout')

@section('adminContent')
  
  <admin-panel
  logout_user="{{ route('logout', app()->getLocale()) }}"
  tutor_img="{{ asset('img/user1.png')}}"
  tutor_home="{{ url(app()->getLocale() . '/home_tutor') }}"
  locale="{{ app()->getLocale() }}"
  link-en="{{ route(Route::currentRouteName(), 'en') }}"
  link-sn="{{ route(Route::currentRouteName(), 'sn') }}"
  ></admin-panel>

@endsection