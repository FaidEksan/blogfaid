<?php

namespace App\Models;

use Illuminate\Support\Arr;


class Post {
    public static function all() {
        return [
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
            ];
    }

    public static function find($slug): array {
        // return Arr::first(static::all(), function($post) use($slug) {
        //     return $post['slug'] == $slug;
        // });
        //Ero Function
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        
        if (!$post) {
            abort(404);
        }
        return $post;
    }

}