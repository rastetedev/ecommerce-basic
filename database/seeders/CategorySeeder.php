<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

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
                'name' => 'Celulares y tablets',
                'slug' =>  Str::slug('Celulares y tablets'),
                'icon' => '<i class="fas fa-mobile-alt"></i>'
            ],
            [
                'name' => 'TV, audio y video',
                'slug' =>  Str::slug('TV, audio y video'),
                'icon' => '<i class="fas fa-tv"></i>'
            ],
            [
                'name' => 'Consolas y videojuegos',
                'slug' =>  Str::slug('Consolas y videojuegos'),
                'icon' => '<i class="fas fa-gamepad"></i>'
            ],
            [
                'name' => 'Computación',
                'slug' =>  Str::slug('Computación'),
                'icon' => '<i class="fas fa-laptop"></i>'
            ],
            [
                'name' => 'Moda',
                'slug' =>  Str::slug('Moda'),
                'icon' => '<i class="fas fa-tshirt"></i>'
            ]
        ];

        foreach($categories as $category){
            Category::factory(1)->create($category);
        }
    }
}
