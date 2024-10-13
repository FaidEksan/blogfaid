<?php

use Illuminate\Support\Facades\Route;

//Tugas PWL 01
// Mengarah ke Halaman Home
Route::get('/', function () {
    return view('home');
});

//Mengarah ke Halaman My Blog
Route::get('/myblog', function() {
    return view('myblog');
});

//Mengarah ke Halaman about
Route::get('/about', function(){
    return view('about');
});

//Mengarah ke Halaman Contact
Route::get('/contact', function(){
    return view('contact', ['nama'=>'M Faid Eksan','prod'=>'Teknik Informatika', 'ig'=>'@faideksan', 'noWa'=>'082140256923','mail'=>'faideksanfakrulloh@gmail.com']);
});