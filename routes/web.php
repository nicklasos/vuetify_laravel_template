<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index');

Route::get('{path}', 'MainController@index')->where('path', '([0-9A-Za-z\-\/]+)?');
