<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Lg',
                "price"=>"20000",
                "description"=>"A smart Phone with 4gb ram and much more feactures",
                "category"=>"Mobile",
                "gallery"=>"https://www.whatmobile.com.pk/admin/images/LG/LGQ8-b.jpg"
            
            ],

            [
                'name'=>'oppo',
                "price"=>"20000",
                "description"=>"A smart Phone with 8gb ram and much more feactures",
                "category"=>"Mobile",
                "gallery"=>"https://mobilemall.pk/public_html/images/product/product_1652099320Oppo-Reno-8-Lite.jpg"
            
            ],
            [
                'name'=>'samsung',
                "price"=>"10000",
                "description"=>"samsung galaxy lcd with good feactures ",
                "category"=>"electronics",
                "gallery"=>"https://images.samsung.com/pk/smartphones/galaxy-z-fold4/images/galaxy-z-fold4_highlights_kv.jpg"
            
            ],
            [
                'name'=>'LG Tv',
                "price"=>"30000",
                "description"=>"A smart tv with much more feactures",
                "category"=>"tv",
                "gallery"=>"https://www.lg.com/in/images/tvs/md07552631/gallery/OLED83C2PSA-DZ-01.jpg"
            
            ],
            [
                'name'=>'Refregerator',
                "price"=>"450000",
                "description"=>"refregerator with much Feactures double door refregerator",
                "category"=>"Mobile",
                "gallery"=>"https://www.dawlance.com.pk/wp-content/uploads/2022/06/Front-5.png"
            
            ],
        ]);
    }
}
