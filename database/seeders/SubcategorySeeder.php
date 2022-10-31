<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Procesadores */
            [
                'category_id' => 1,
                'name' => 'Procesadores',
                'slug' => Str::slug('Procesadores'),
            ],

            [
                'category_id' => 1,
                'name' => 'Coolers',
                'slug' => Str::slug('Coolers'),
            ],

            [
                'category_id' => 1,
                'name' => 'Pastas Térmicas',
                'slug' => Str::slug('Pastas Térmicas'),
            ],

            /* Motherboards */

            [
                'category_id' => 2,
                'name' => 'Motherboards para socket Intel',
                'slug' => Str::slug('Motherboards para Socket Intel'),
            ],

            [
                'category_id' => 2,
                'name' => 'Motherboards para Socket AMD',
                'slug' => Str::slug('Motherboards para Socket AMD'),
            ],

            /* Memorias RAM */
            [
                'category_id' => 3,
                'name' => 'Memorias',
                'slug' => Str::slug('Memorias'),
            ],

            [
                'category_id' => 3,
                'name' => 'Memorias Sodimm',
                'slug' => Str::slug('Memorias Sodimm'),
            ],

            /* Unidades de Almacenamiento */

            [
                'category_id' => 4,
                'name' => 'Discos Rigidos Externo',
                'slug' => Str::slug('Discos Rigidos Externos'),
            ],

            
            [
                'category_id' => 4,
                'name' => 'Discos Rigidos',
                'slug' => Str::slug('Discos Rigidos'),
            ],

            [
                'category_id' => 4,
                'name' => 'Discos Sólidos SSD',
                'slug' => Str::slug('Discos Sólidos SSD'),
            ],

            /* Placas de Video */
            [
                'category_id' => 5,
                'name' => 'Placas de Video Geforce',
                'slug' => Str::slug('Placas de Video Geforce'),
            ],

            [
                'category_id' => 5,
                'name' => 'Placas de Video Radeon',
                'slug' => Str::slug('Placas de Video Radeon'),
            ],

            /* Gabinetes */
            [
                'category_id' => 6,
                'name' => 'Gabinetes',
                'slug' => Str::slug('Gabinetes'),
            ],

            [
                'category_id' => 6,
                'name' => 'Coolers Fan',
                'slug' => Str::slug('Coolers Fan'),
            ],

            /* Fuentes de alimentación */
            [
                'category_id' => 7,
                'name' => 'Fuentes Genericas',
                'slug' => Str::slug('Fuentes Genericas'),
            ],

            [
                'category_id' => 7,
                'name' => 'Fuentes Certificadas',
                'slug' => Str::slug('Fuentes Certificadas'),
            ],
        ];

        foreach ($subcategories as $subcategory) {
            

            Subcategory::create($subcategory);

        }
    }
}
