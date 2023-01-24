<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Programming',
                'slug' => Str::slug('Programming', '-'),
                'image' => 'category-image/programming.jpg'
            ],
            [
                'name' => 'Science',
                'slug' => Str::slug('Science', '-'),
                'image' => 'category-image/science.jpg'
            ],
            [
                'name' => 'Gaming',
                'slug' => Str::slug('Gaming', '-'),
                'image' => 'category-image/gaming.jpg'
            ],
            [
                'name' => 'Sport',
                'slug' => Str::slug('Sport', '-'),
                'image' => 'category-image/sport.jpg'
            ],
            [
                'name' => 'Animal',
                'slug' => Str::slug('Animal', '-'),
                'image' => 'category-image/animal.jpg'
            ],
            [
                'name' => 'Automotive',
                'slug' => Str::slug('Automotive', '-'),
                // 'image' => 'category-image/automotive.jpg'
            ],
            [
                'name' => 'Art',
                'slug' => Str::slug('Art', '-'),
                // 'image' => 'category-image/art.jpg'
            ],
            [
                'name' => 'Food',
                'slug' => Str::slug('Food', '-'),
                // 'image' => 'category-image/Food.jpg'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
