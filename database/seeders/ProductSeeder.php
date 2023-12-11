<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            'name' => 'HP laptop',
            'price'=> '40000',
            'description' => 'a laptop with i3 processor and 4gb and 1 tr storage  and much more features',
            'category' => 'Laptop',
            'gallery' =>'https://i5.walmartimages.com/asr/ee1840e1-d589-498f-810c-0d4ee6cc9a4e.f05cdc65e3976a4b7af1aec5806d8034.jpeg'
    ]);
       
   
    }
}
