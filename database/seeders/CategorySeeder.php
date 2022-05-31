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
            [
                'id' => 1 ,
                'category' => 'Fiction' 
            ],
            [
                'id' => 2 ,
                'category' => 'Science' 
            ],
            [
                'id' => 3 ,
                'category' => 'Computer' 
            ],
            [
                'id' => 4 ,
                'category' => 'Financial' 
            ],
            [
                'id' => 5 ,
                'category' => 'Travel' 
            ],
            [
                'id' => 6 ,
                'category' => 'CookBook' 
            ]
        ]);
    }
}
