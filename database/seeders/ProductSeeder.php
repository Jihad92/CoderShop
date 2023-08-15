<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Women
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Women ' . $i,
                'slug' => 'women-' . $i,
                'details' => 'women\'s hoodie',
                'description' => 'This is a description of this item',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);
        }

        // Men
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Men ' . $i,
                'slug' => 'men-' . $i,
                'details' => 'men\'s hoodie',
                'description' => 'This is a description of this item',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);
        }

        // Kids
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Kids ' . $i,
                'slug' => 'kids-' . $i,
                'details' => 'kids\'s hoodie',
                'description' => 'This is a description of this item',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);
        }

        // Home Goods
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Home Goods ' . $i,
                'slug' => 'homegoods-' . $i,
                'details' => 'homegoods',
                'description' => 'This is a description of this item',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ]);
        }
    }
}
