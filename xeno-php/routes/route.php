<?php
use App\Services\Route;
use App\Middleware\{Auth,Guest};

Route::get('/','HomeController','index');
Route::get('/login','LoginController','index',[Guest::class]);

Route::post('/submit-login','LoginController','login');
Route::get('/logout','DashboardController','logout',[Auth::class]);

Route::get('/dashboard','DashboardController','index',[Auth::class]);


Route::get('/register','RegisterController','index');
Route::post('/submit-register','RegisterController','register');


