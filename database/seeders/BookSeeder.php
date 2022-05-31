<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                "category_id" => 1 ,
                "title" => "Snow Dancer"
            ],
            [
                "category_id" => 1 ,
                "title" => "Teenlit: Vision"
            ],
            [
                "category_id" => 1 ,
                "title" => "Summer Triangle"
            ],
            [
                "category_id" => 2 ,
                "title" => "Pengantar Kimia Analitik Modern - Metode&Aplikasi"
            ],
            [
                "category_id" => 2 ,
                "title" => "Ng Almanac 2020"
            ],
            [
                "category_id" => 2 ,
                "title" => "Berbohong Dengan Statistik"
            ],
            [
                "category_id" => 3 ,
                "title" => "Belajar Otodidak Mysql Edisi Kedua"
            ],
            [
                "category_id" => 3 ,
                "title" => "Machine Learning Untuk Pemula"
            ],
            [
                "category_id" => 3 ,
                "title" => "Kitab MS Office 2021"
            ],
            [
                "category_id" => 4 ,
                "title" => "Yuk Belajar Nabung Saham"
            ],
            [
                "category_id" => 4 ,
                "title" => "Financial Ratio For Bussiness"
            ],
            [
                "category_id" => 4 ,
                "title" => "Keuangan Berbasis Perilaku"
            ],
            [
                "category_id" => 5 ,
                "title" => "Eksotika Toba"
            ],
            [
                "category_id" => 5 ,
                "title" => "Japan's Best Destination"
            ],
            [
                "category_id" => 5 ,
                "title" => "Value Traveling"
            ],
            
        ]);
    }
}
