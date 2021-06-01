<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        DB::table('product')->insert([
            [
                'product_name'=>'Adidas Lite Racer 2.0',
                "Price"=>'399.000',
                "Stock"=>"25",
                "Description"=>"Adidas",
                "Image"=>"images/Adidas_lite_racer_2.0_(IDR 399k).jpg"
            ],
            [
                'product_name'=>'Adidas samba OG Classic',
                "Price"=>'799.000',
                "Stock"=>"25",
                "Description"=>"Adidas",
                "Image"=>"images/Adidas_samba_OG_Classic_(IDR 799k).jpg"
            ],
            [
                'product_name'=>'Adidas Stan Smith Polka White Leather',
                "Price"=>'399.000',
                "Stock"=>"25",
                "Description"=>"Adidas",
                "Image"=>"images/Adidas_stan_smith_polka_white_leather_(IDR 399k).jpg"
            ],
            [
                'product_name'=>'Adidas Terrex CMTK Outdoor',
                "Price"=>'999.000',
                "Stock"=>"25",
                "Description"=>"Adidas",
                "Image"=>"images/Adidas_Terrex_CMTK_Outdoor_(IDR 999k).jpg"
            ]
        ]);
    }
}
