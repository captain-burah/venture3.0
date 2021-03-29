@extends('admin.layout')

@section('adminContent')
  
  <admin-panel
  
    tutor_img="{{ asset('img/user1.png')}}"
    tutor_home="{{ url(app()->getLocale() . '/home_tutor') }}"

    username1="{{ Auth::user()->fname }} {{ Auth::user()->lname }}"
    brand1="{{ asset('img/favicon/6.png')}}"
    user1="{{ asset('img/faces/marc.jpg')}}"

    logout_base="{{ route('admin.logout') }}"

    logout_user1="{{ url('/admin/logout')}}"
  >
  </admin-panel>

@endsection