<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        //
        $products = [];
        
        
        for($i = 1; $i < 500; $i++){
            $productName = $faker->name;
            $product = [];
            $product['name'] = $productName;
            $product['slug'] = Str::slug($productName, '-');
            $product['sell_price'] = rand(900, 2000);
            $product['image'] = $faker->imageUrl($width = 640, $height = 480);
            $product['category_id'] = rand(1, 10);
            $product['sku'] = 'HNG'.time();
            $product['description'] = $faker->realText($maxNbChars = 200, $indexSize = 2);
            $product['supplier_id'] = rand(1, 10);
            // $products[] = $product;

            DB::table('products')->insert($product);
    
        }

    }
}
