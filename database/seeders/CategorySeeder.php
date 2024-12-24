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
        ]);

        Category::create([
            'category' => 'UI/UX',
            'slug' => 'ui-ux',
        ]);

        Category::create([
            'category' => 'Machine Learning',
            'slug' => 'machine-learning',
        ]);
    }
}
