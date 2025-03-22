<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Frutas',
            'slug' => 'frutas',
        ]);

        DB::table('categories')->insert([
            'name' => 'Cremes e Geleias',
            'slug' => 'Cremes e Geleias'
        ]);
    }
}
