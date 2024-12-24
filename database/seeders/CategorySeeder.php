<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'red',
        ]);

        Category::create([
            'category' => 'UI/UX',
            'slug' => 'ui-ux',
            'color' => 'green',
        ]);

        Category::create([
            'category' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'blue',
        ]);

        Category::create([
            'category' => 'Data Structure',
            'slug' => 'data-structure',
            'color' => 'yellow',
        ]);
    }
}
