<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Validation\Rules\Unique;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::whereNotNull('parent_id')->pluck('id');

        for($i = 1; $i <= 20; $i ++) {
            $products[] = [
                'name'          => 'test',
                'slug'          => rand(2,99).'2',
                'description'   =>'test',
                'details'       => 'test',
                'price'         => 22,
                'quantity'      => 1,
                'category_id'   => $categories->random(),
                'featured'      => rand(0, 1),
                'status'        => true,
                'created_at'    => now(),
                'updated_at'    => now()
            ];
        }

        $chunks = array_chunk($products, 50);
        foreach ($chunks as $chunk) {
            Product::insert($chunk);
        }
    }
}
