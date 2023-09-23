<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => "Iphone 15",
            'description' => "Apple smartphone",
            'price' => 990
        ]);
        DB::table('products')->insert([
            'name' => "Iphone 15 plus",
            'description' => "Apple smartphone",
            'price' => 1100
        ]);
        DB::table('products')->insert([
            'name' => "Iphone 15 pro",
            'description' => "Apple smartphone",
            'price' => 1350
        ]);
        DB::table('products')->insert([
            'name' => "Iphone 15 pro max",
            'description' => "Apple smartphone",
            'price' => 1550
        ]);
    }
}
