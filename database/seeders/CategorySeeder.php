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
            'name' => 'Web Developer',
            'slug' => 'web-developer',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Data Scientis',
            'slug' => 'data-scientis',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Front end Developer',
            'slug' => 'front-end-developer',
            'color' => 'yellow'
        ]);
    }
}
