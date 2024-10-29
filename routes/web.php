<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

//Tugas PWL 01
// Mengarah ke Halaman Home
Route::get('/', function () {
    return view('home', ['tittle' => 'Halaman Utama']);
});

//Mengarah ke Halaman My Blog
Route::get('/posts', function() {
    return view('posts', ['tittle' => 'My Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'backend-dev',
            'title' => 'Back end Developer',
            'author' => 'M Faid Eksan',
            'body' => '
            Back-End Developer menggunakan bahasa pemrograman seperti Python, Java, Node.js, serta database seperti SQL atau NoSQL. Mereka juga memanfaatkan layanan cloud (AWS, Google Cloud) dan memprioritaskan keamanan data dengan enkripsi dan proteksi server.
            '
        ],
        [
            'id' => 2,
            'slug' => 'tugasdev',
            'title' => 'Tugas Utama B-eD',
            'author' => 'M Faid Eksan',
            'body' => '
            Setiap divisi dalam pengembangan software memiliki tugasnya masing-masing. Begitu pula pengembangan server oleh developer yang mumpuni. Tugas intinya memang membuat software berjalan baik dan lancar sehingga user tidak mengalami masalah apapun.
            '
        ]
    ]]);
});

//Mengarah ke Halaman POst
Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'backend-dev',
            'title' => 'Back end Developer',
            'author' => 'M Faid Eksan',
            'body' => 'Back-End Developer menggunakan bahasa pemrograman seperti Python, Java, Node.js, serta database seperti SQL atau NoSQL. Mereka juga memanfaatkan layanan cloud (AWS, Google Cloud) dan memprioritaskan keamanan data dengan enkripsi dan proteksi server.'
        ],
        [
            'id' => 2,
            'slug' => 'tugasdev',
            'title' => 'Tugas Utama B-eD',
            'author' => 'M Faid Eksan',
            'body' => 'Setiap divisi dalam pengembangan software memiliki tugasnya masing-masing. Begitu pula pengembangan server oleh developer yang mumpuni. Tugas intinya memang membuat software berjalan baik dan lancar sehingga user tidak mengalami masalah apapun.'
        ]
    ];

    $post = Arr::first($posts, function($post) use($slug) {
        return $post['slug'] == $slug;
    });

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