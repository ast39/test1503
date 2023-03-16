<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;


Route::get('/', function () {
    return redirect('/api/docs');
});


if (env('APP_ENV') === 'production') {
    URL::forceScheme('https');
}
