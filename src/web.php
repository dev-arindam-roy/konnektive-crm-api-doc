<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('konnektive-api-doc', function() {
    return Redirect::to('https://apidocs.konnektive.com/');
});
