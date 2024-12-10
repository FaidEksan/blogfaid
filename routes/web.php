<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


//Tugas PWL 01
// Mengarah ke Halaman Home
Route::get('/', function () {
    return view('home', ['tittle' => 'Halaman Utama']);
});

//Mengarah ke Halaman My Blog
Route::get('/posts', function() {
    //$posts = Post::with(['author', 'category'])->latest()->get();

    return view('posts', ['tittle' => 'My Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(10)->withQueryString() ]);
});

//Mengarah ke Halaman POst
Route::get('/posts/{post:slug}', function(Post $post) {

    return view ('post', ['title' => 'Single Post', 'post' => $post ]);
});


//Mengarah ke Halaman POst ber Authors
Route::get('/authors/{user:username}', function(User $user) {
    //$posts = $user->posts->load('category', 'author');
    return view ('posts', ['tittle' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});


//Mengarah ke Halaman Post ber Category
Route::get('/categories/{category:slug}', function(Category $category) {
    // $posts = $category->posts->load('category', 'author');
    return view ('posts', ['tittle' => ' Articles : ' . $category->name, 'posts' => $category->posts]);
});


//Mengarah ke Halaman about
Route::get('/about', function(){
    return view('about', ['tittle'=>'About']);
});

//Mengarah ke Halaman Contact
Route::get('/contact', function(){
    return view('contact', ['tittle'=>'Contact Us', 'nama'=>'M Faid Eksan','prod'=>'Teknik Informatika', 'wa'=>'082140256923', 'gitHub'=>'Faid Eksan','mail'=>'faideksanfakrulloh@gmail.com']);
});