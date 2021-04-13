<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing_page.index');
Route::view('/case-study-page', 'case_study_page.index');
Route::view('/case-study-solo', 'case_study_solo.index');
Route::view('/insights', 'insights.index');
Route::view('/insights/detail', 'insights.detail');
Route::view('/contact', 'contact.index');
Route::view('/capabilities', 'capabilities.index');
Route::view('/careers', 'careers.index');
Route::view('/role-app', 'role-app.index');
Route::view('/privacy-policy', 'privacy_policy.index');
Route::view('/terms-and-conditions', 'terms_conditions.index');
Route::view('/terms-and-conditions', 'terms_conditions.index');
Route::view('/our-proccess', 'our_proccess.index');
