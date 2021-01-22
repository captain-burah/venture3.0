<!--
|
|
|
|    __________________  NOTE  ______________________
|    LOCALIZATION IS DONE USING TRANLATION SHORT KEYS
|    file location: resources/lang/en/setup
|                            or
|                    resources/lang/sn/setup
|
|
|
-->
@extends('layouts.appSetupTutor')

@section('content')
    <div class="container-fluid">
        <!--------------------------------------------->
        <div class="row col-md-12 pb-3">
            
        </div>
        <!--------------------------------------------->
        <div class="row col-md-8 ml-auto mr-auto">
                <div class="card card-nav-tabs bg-white text-dark border border-info">
                    <div class="card-header card-header-info">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <h2 class="text-center">{{ __('setup.card_header')}}</h2>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <form id="regForm" action="{{ url(app()->getLocale() . '/setup_finish') }}" method="POST">
                            @csrf
                            <div class="tab-content text-center">
                                <p class="col-md-11 ml-auto mr-auto text-center p-3 pb-0 mb-0">
                                    {{ __('setup.privacy_notify')}}
                                </p>
                                @if ($errors->any())
                                    <div class="col-md-5 alert mx-auto alert-danger p-0 m-0 text-center rounded">
                                        <ul class="list-group rounded py-0">
                                            @foreach ($errors->all() as $error)
                                                <li class="list-group-item mx-auto py-1">
                                                    <h5 class="mx-auto py-1 my-1">{{ __('Validation Error! ')}}{{ $error }}</h5>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <!---------------------------- First Tab: -------------------------->
                                <div class="tab ">
                                    <!------- Profession -------------------->
                                        <div class="form-group col-md-10 ml-auto mr-auto mt-2">
                                            <div class="row">
                                                <h2 class="col-md-4 m-1 text-center">{{ __('setup.firstTab_1')}}</h2>
                                                <div class="input-group col-md-6 m-1 py-auto my-auto">
                                                    <select class="custom-select" id="profession" name="profession" data-toggle="tooltip" 
                                                    data-placement="top" title="state your profession" tabindex="0" onchange="yesnoCheck(this);">
                                                        <option value="Student">Student</option>
                                                        <option value="Undergraduate">Undergraduate</option>
                                                        <option value="Postgraduate">Postgraduate</option>
                                                        <option value="Professional Tutor">Professional Full Time Tutor</option>
                                                        <option value="Other">Other: state your profession</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div id="ifYes" style="display: none;" class="">
                                                <label for="Other02">{{ __("setup.firstTab_2")}}</label>
                                                <textarea type="text" rows="1" id="Other02" name="Other02" class="form-control" 
                                                placeholder="Doctor, Engineer, Chartered Accountant, etc"></textarea>
                                            </div>
                                        </div>
                                    <!------ /Profession -------------------->
                                </div>

                                <!---------------------------- Second Tab: -------------------------->
                                <div class="tab mt-5">
                                    <div class="row">
                                        <h2 class="col-md-4 m-1 text-right text-center">{{ __('setup.secondTab_1')}}</h2>
                                        <!------- Experience -------------------->
                                        <div class="form-group col-md-6 m-1 my-auto py-auto">
                                            <div class="input-group">
                                                <select class="custom-select" id="experience" name="experience" 
                                                data-toggle="tooltip" data-placement="top" title="state your experience" tabindex="0">
                                                    <option value="Just Starting">{{ __("setup.secondTab_2")}}</option>
                                                    <option value="Moderate">{{ __("setup.secondTab_3")}}</option>
                                                    <option value="Professional">{{ __("setup.secondTab_4")}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!------ /Experience -------------------->
                                </div>

                                <!---------------------------- Third Tab: -------------------------->
                                <div class="tab ">
                                    <h2>{{ __('setup.thirdTab_1')}}</h2>
                                    <!------- Address-------------------->
                                    <div class="form-group row col-md-11 ml-auto mr-auto pt-3">
                                        <label>{{ __('setup.thirdTab_2')}}</label>
                                    </div>
                                        <div class="form-group row col-md-11 ml-auto mr-auto px-0">
                                            <div class="form-group col-md-3 pt-0">
                                                <input type="text" class="form-control" name="address01" 
                                                placeholder="{{ __('setup.thirdTab_3')}} (No. 112/1-B)" 
                                                required autofocus>
                                            </div>
                                            <div class="form-group col-md-3 pt-0">
                                                <input type="text" class="form-control" name="address02" 
                                                placeholder="{{ __('setup.thirdTab_4')}} (Bandaranayakepura)" 
                                                required autofocus>
                                            </div>
                                            <div class="form-group col-md-3 pt-0">
                                                <input type="text" class="form-control" name="address03" 
                                                placeholder="{{ __('setup.thirdTab_5') }} (Nugegoda)" 
                                                required autofocus>
                                            </div>
                                            <div class="form-group col-md-3 pt-0">
                                                <input type="text" class="form-control" name="address04" 
                                                placeholder="{{ __('setup.thirdTab_6') }} (Colombo)" 
                                                required autofocus>
                                            </div>
                                        </div>
                                    <!------ /Address-------------------->

                                    <!------- Contact-------------------->
                                        <div class="form-group row col-md-11 ml-auto mr-auto pt-3">
                                            <input type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" 
                                            name="contact" placeholder="{{ __('setup.thirdTab_7') }} (eg: 0XX 123 4567)" value="{{ old('contact') }}" 
                                            required autofocus >

                                            @if ($errors->has('contact'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('contact') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    <!------ /Contact-------------------->

                                    <!------- DOB-------------------->
                                        <div class="form-group-row col-md-6 ml-auto mr-auto pt-3 text-left">
                                            <label class="label-control bmd-label-static">{{ __('setup.thirdTab_8') }}</label>
                                            <input type="date" name="dob" id="dob" 
                                            class="form-control {{ $errors->has('dob') ? ' is-invalid' : '' }}" required>
                                            
                                            @if ($errors->has('dob'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('dob') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    <!------ /DOB-------------------->
                                </div>

                                <!---------------------------- Fourth Tab: -------------------------->
                                <div class="tab">
                                    <h3>{{ __('Education Background')}}</h3>
                                    <!------ Qualification-------------------->
                                        <div class="form-group col-md-11 ml-auto mr-auto pt-0 pb-3">
                                            <textarea  id="qualification" rows="3" class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}" 
                                                name="qualification" placeholder="{{ __('setup.fourthTab_2')}} &#10;{{ __('eg: B.Sc. in Business Management,')}} &#10; {{ __(' Masters in Business Analytics')}}" value="{{ old('qualification') }}" required autofocus ></textarea>
     
                                            @if ($errors->has('qualification'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('qualification') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    <!------ Qualification-------------------->

                                    <!------ Alma Mater-------------------->
                                        <div class="form-group col-md-11 ml-auto mr-auto pt-0 pb-3">
                                            <input type="text" class="form-control{{ $errors->has('school') ? ' is-invalid' : '' }}" 
                                            name="school" placeholder="{{ __('setup.fourthTab_3') }} eg: school or university" value="{{ old('school') }}" 
                                            required autofocus >

                                            @if ($errors->has('school'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('school') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    <!------ Alma Mater-------------------->

                                    <!------ Achievements-------------------->
                                        <div class="form-group col-md-11 ml-auto mr-auto pt-0 pb-3">
                                            <input type="text" class="form-control{{ $errors->has('achievements') ? ' is-invalid' : '' }}" 
                                            name="achievements" placeholder="{{ __('setup.fourthTab_4') }}  eg: Island 1st, District 1st" value="{{ old('achievements') }}" 
                                            required autofocus >
                                            

                                            @if ($errors->has('achievements'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('achievements') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    <!------ Achievements-------------------->
                                </div>

                                <!---------------------------- Fifth Tab: -------------------------->
                                <div class="tab">
                                    <h3>{{ __('setup.fifthTab_1')}}</h3>
                                    <!------ Profile Picture-------------------->
                                        <div class="form-group form-file-upload form-file-multiple col-md-6  ml-auto mr-auto pt-0">
                                            <div class="ml-auto mr-auto image-preview mb-5" id="imagePreview">
                                                <img src="{{ asset('img/profile/tutors.png')}}" alt="Image Preview" 
                                                class="image-preview__image ml-auto mr-auto shadow-lg">
                                                <span class="image-preview__default-text mx-auto ">Image Preview</span>
                                            </div>
                                            
                                            <input type="file" class="inputFileHidden" name="profileImg" id="inpFile">
                                            <div class="input-group">
                                                <input type="text" class="form-control inputFileVisible" 
                                                placeholder="{{ __('setup.fifthTab_2')}}">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-fab btn-round btn-primary">
                                                        <i class="material-icons">attach_file</i>
                                                    </button>
                                                </span>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-primary text-small text-capitalize mt-2" data-toggle="tooltip" 
                                            data-placement="bottom" title="Height & Width be 400px">
                                                {{ __('setup.fifthTab_3')}}
                                            </button>
                                        </div>
                                    <!------ Profile Picture-------------------->
                                    <input type="email" class="" name="email" value="{{ Auth::user()->email }}" style="display: none">
                                </div>          

                                <!---------------------------- Buttons: -------------------------->
                                <div style="overflow:auto;">
                                    <div style="float:right;" class="pr-4 pt-4">
                                        <button type="button" class="btn btn-warning" id="prevBtn" 
                                        onclick="nextPrev(-1)">{{ __('Previous')}}</button>

                                        <button type="button" class="btn btn-md btn-success btn-round" 
                                        id="nextBtn" onclick="nextPrev(1)">{{ __('Next')}}</button>
                                    </div>
                                </div>
                                
                                <!---------------------------- Circles Steps: ----------------------->
                                <div style="text-align:center;margin-top:40px;">
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            
        </div>
@endsection