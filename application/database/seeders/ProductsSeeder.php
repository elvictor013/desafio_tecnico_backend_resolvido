<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Acerola',
            'slug' => 'acerola',
            'price' => 90.00
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Caju',
            'slug' => 'caju',
            'price' => 100.00
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Goiaba',
            'slug' => 'goiaba',
            'price' => 50.00
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Limão',
            'slug' => 'limao',
            'price' => 20.00
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Geleia de Pimenta',
            'slug' => 'geleia-de-pimenta',
            'price' => 40.00
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Creme inglês',
            'slug' => 'creme-ingles',
            'price' => 15.00
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Geleia de amora',
            'slug' => 'geleia-de-amora',
            'price' => 23.00
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Abacaxi',
            'slug' => 'abacaxi',
            'price' => 10.00
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Abacate',
            'slug' => 'abacate',
            'price' => 10.00
        ]);
    }
}
