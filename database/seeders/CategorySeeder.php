<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
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
                'name' => 'Procesadores',
                'slug' => Str::slug('Procesadores'),
                'icon' => '1'
            ],
            [
                'name' => 'Motherboards',
                'slug' => Str::slug('Motherboards'),
                'icon' => '2'
            ],

            [
                'name' => 'Memorias RAM',
                'slug' => Str::slug('Memorias RAM'),
                'icon' => '3'
            ],

            [
                'name' => 'Unidades de Almacenamiento',
                'slug' => Str::slug('Unidades de Almacenamiento'),
                'icon' => '4'
            ],

            [
                'name' => 'Placas de Video',
                'slug' => Str::slug('Placas de Video'),
                'icon' => '5'
            ],

            [
                'name' => 'Gabinetes',
                'slug' => Str::slug('Gabinetes'),
                'icon' => '6'
            ],

            [
                'name' => 'Fuentes de Alimentación',
                'slug' => Str::slug('Fuentes de Alimentación'),
                'icon' => '7'
            ],
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }

    }
}
