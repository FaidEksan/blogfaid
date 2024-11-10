<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Post extends Model // Terhubung ke tabel blog_posts

{
    protected $fillable = ['title', 'author', 'slug', 'body'];
}