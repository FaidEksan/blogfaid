<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


//Tugas PWL 01
// Mengarah ke Halaman Home
Route::get('/', function () {
    return view('home', ['tittle' => 'Halaman Utama']);
});

//Mengarah ke Halaman My Blog
Route::get('/posts', function() {
    return view('posts', ['tittle' => 'My Blog', 'posts' => Post::all()]);
});

//Mengarah ke Halaman POst
Route::get('/posts/{post:slug}', function(Post $post) {

    return view ('post', ['title' => 'Single Post', 'post' => $post ]);
});

//Mengarah ke Halaman about
Route::get('/about', function(){
    return view('about', ['tittle'=>'About']);
});

//Mengarah ke Halaman Contact
Route::get('/contact', function(){
    return view('contact', ['tittle'=>'Contact Us', 'nama'=>'M Faid Eksan','prod'=>'Teknik Informatika', 'wa'=>'082140256923', 'gitHub'=>'Faid Eksan','mail'=>'faideksanfakrulloh@gmail.com']);
});