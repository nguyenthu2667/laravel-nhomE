<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['categoryName' => 'animals','categoryType' => 'animals'],
            ['categoryName' => 'finace','categoryType' => 'finace'],
            ['categoryName' => 'videos','categoryType' => 'videos'],
            ['categoryName' => 'sports','categoryType' => 'sports'],
        ]);
    }
}
