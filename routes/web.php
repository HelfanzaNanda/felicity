<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing_page.index');
Route::view('/insights-all', 'insights_all.index');

// Route::get('/', function () {
//     return view('welcome');
// });
