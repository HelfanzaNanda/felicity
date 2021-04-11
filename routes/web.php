<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing_page.index');
Route::view('/case-study-page', 'case_study_page.index');
Route::view('/case-study-solo', 'case_study_solo.index');
Route::view('/insights/list', 'insights.index');
Route::view('/insights/detail', 'insights.detail');
Route::view('/contact', 'contact.index');
Route::view('/capabilities', 'capabilities.index');
Route::view('/careers', 'careers.index');
