<?php

use Illuminate\Support\Facades\Route;

//Tugas PWL 01
// Mengarah ke Halaman Home
Route::get('/', function () {
    return view('home', ['tittle' => 'Halaman Utama']);
});

//Mengarah ke Halaman My Blog
Route::get('/myblog', function() {
    return view('myblog', ['tittle' => 'Back End Developer']);
});

//Mengarah ke Halaman about
Route::get('/about', function(){
    return view('about', ['tittle'=>'About']);
});

//Mengarah ke Halaman Contact
Route::get('/contact', function(){
    return view('contact', ['tittle'=>'Contact Us'], ['nama'=>'M Faid Eksan','prod'=>'Teknik Informatika', 'wa'=>'082140256923', 'gitHub'=>'Faid Eksan','mail'=>'faideksanfakrulloh@gmail.com']);
});