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
                'product_name'=>'Converse CTAS Cheerful Faded Spruce',
                "Price"=>'459.000',
                "Stock"=>"25",
                "Description"=>"Converse",
                "Image"=>"images/Converse_CTAS_cheerful_faded spruce_(IDR 459k).jpg"
            ],
            [
                'product_name'=>'Converse CTAS Happy Camper',
                "Price"=>'449.000',
                "Stock"=>"25",
                "Description"=>"Converse",
                "Image"=>"images/Converse_CTAS_Happy_Camper_(IDR 449k).jpg"
            ],
            [
                'product_name'=>'Converse El Distrito 2.0',
                "Price"=>'359.000',
                "Stock"=>"25",
                "Description"=>"Converse",
                "Image"=>"images/Converse_El_distrito_2.0_(IDR 359k).jpg"
            ],
            [
                'product_name'=>'CTAS Hi Camo Patch',
                "Price"=>'449.000',
                "Stock"=>"25",
                "Description"=>"Converse",
                "Image"=>"images/CTAS_Hi_Camo_Patch_(IDR 449k).jpg"
            ]
        ]);
    }
}
