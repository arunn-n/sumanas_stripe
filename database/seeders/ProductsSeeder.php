<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'product_id' => '1',
            'Product_name' => 'Product 1',
            'price' => 10.99,
            'description' => 'Sample Description for product 1',
        ]);
    
        Products::create([
            'product_id' => '2',
            'Product_name' => 'Product 2',
            'price' => 19.99,
            'description' => 'Sample Description for product 2',
        ]);

        Products::create([
            'product_id' => '3',
            'Product_name' => 'Product 3',
            'price' => 20.99,
            'description' => 'Sample Description for product 3',
        ]);

        Products::create([
            'product_id' => '4',
            'Product_name' => 'Product 4',
            'price' => 24.99,
            'description' => 'Sample Description for product 4',
        ]);

        Products::create([
            'product_id' => '5',
            'Product_name' => 'Product 5',
            'price' => 27.99,
            'description' => 'Sample Description for product 5',
        ]);
    }
}
