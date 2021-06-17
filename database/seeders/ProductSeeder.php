<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
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
            [
                'product_name'=>'Vans Era Gum Green',
                "Price"=>'499000',
                "Stock"=>"25",
                "Description"=>"Vans",
                "Image"=>"images/Vans era gum green (IDR 499k).jpg"
            ],
            [
                'product_name'=>'Vans Era Primary Check True Blue',
                "Price"=>'649000',
                "Stock"=>"25",
                "Description"=>"Vans",
                "Image"=>"images/Vans era primary check true blue (IDR 649k).jpg"
            ],
            [
                'product_name'=>'Vans Era Ultramarine True White',
                "Price"=>'499000',
                "Stock"=>"25",
                "Description"=>"Vans",
                "Image"=>"images/Vans era ultramarine true white (IDR 499k).jpg"
            ],
            [
                'product_name'=>'Vans Tc Suede True Navy',
                "Price"=>'699000',
                "Stock"=>"25",
                "Description"=>"Vans",
                "Image"=>"images/Vans tc suede true navy (IDR 699k).jpg"
            ]
        ]);
    }
}
