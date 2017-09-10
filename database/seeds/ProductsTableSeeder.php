<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Mazda',
            'description' => 'Very-very good mazda',
            'price' => 10000,
            'image'=>'https://www.mazda.by/wp-content/uploads/2016/08/6-pics_11.png',
        ]);

        DB::table('products')->insert([
            'title' => 'Mersedes',
            'description' => 'Awesome mersedes',
            'price' => 145000,
            'image'=>'http://www.rp2auto.com.br/uploads/widget/image/219/865/21986585/wpid-mercedes-benz-concept-style-coupe24.jpg',
        ]);

        DB::table('products')->insert([
            'title' => 'Audi',
            'description' => 'Remarkable audi',
            'price' => 12000,
            'image'=>'http://st.motortrend.com/uploads/sites/10/2015/11/2015-audi-a7-3.0-t-quattro-sedan-angular-front.png',
        ]);

         DB::table('products')->insert([
            'title' => 'Lexus',
            'description' => 'Some lexus',
            'price' => 4000,
            'image'=>'http://www.lexus.com/byl2014/pub-share/images/series/lc.png',
        ]);

         DB::table('products')->insert([
            'title' => 'Lambo',
            'description' => 'Just Lambo',
            'price' => 138797,
            'image'=>'http://buyersguide.caranddriver.com/media/assets/submodel/8057.jpg',
        ]);
    }
}
