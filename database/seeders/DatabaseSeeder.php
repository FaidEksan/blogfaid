<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use function Pest\Laravel\post;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Category::create([
        //     'name' => 'Android Studio',
        //     'slug' => 'andorid-Studio'
        // ]);

        // Post::create([
        //     'title' => 'Web Design',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Perancangan web (web design) adalah istilah umum yang digunakan untuk mencakup bagaimana isi web konten ditampilkan, (biasanya berupa hypertext atau hypermedia) yang dikirimkan ke pengguna akhir melalui World Wide Web, dengan menggunakan sebuah browser web atau perangkat lunak berbasis web.'
        // ]);

        //Ini sayaa menggunakan yang lebih cepat model yang jadi satu
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
            
        ])->create();

        //ini yang terpisah


    }
}
