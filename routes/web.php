<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing_page.index');
Route::view('/case-study-page', 'case_study_page.index');
Route::view('/case-study-solo', 'case_study_solo.index');
Route::view('/insights/list', 'insights.index');

// Route::get('/', function () {
//     return view('welcome');
// });
