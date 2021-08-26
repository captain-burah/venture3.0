<?php

Route::get('/{any?}', function () {
    return view('landing');
})->where('any', '^(?!api\/)[\/\w\.\,-]*')->name('landing-page');;

