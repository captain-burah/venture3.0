@extends('layouts.error')

@section('content')
<div class="content">
    <div class="row col-md-12">
        <div class="title col-md-6">
            {{$message1}}
        </div>
        <div class="col-md-6 sub-title m-b-md">{{$message2}}</div>
    </div>
    <div class="row sub-sub-title col-md-12 m-b-md">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <p style="font-weight: bold;">Error Message: <span style="color:; font-weight: bold;">{{$message3}}</span></p>
        <p>Please grab a screen-shot or photo of this error message and reach out to our admin to rectify this problem.</p>
    </div>
    <div class="links">
        <a>-Enlight-</a>
    </div>
</div>
@endsection