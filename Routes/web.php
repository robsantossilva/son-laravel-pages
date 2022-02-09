<?php

use Illuminate\Support\Facades\Route;

Route::get('/pages', 'PagesController@index');
Route::get('/pages/view', 'PagesController@view');
