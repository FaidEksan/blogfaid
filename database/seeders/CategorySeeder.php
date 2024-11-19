<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use PhpParser\Node\Stmt\Catch_;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Aplikasi Hp',
            'slug' => 'aplikasi-sp'
        ]);

        Category::create([
            'name' => 'Website Resmi',
            'slug' => 'website-resmi'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'mesin-learning'
        ]);
    }
}
