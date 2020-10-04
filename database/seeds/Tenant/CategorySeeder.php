<?php

namespace Database\Seeders\Tenant;

use App\Models\Product\ProductCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    private $categories = [
        'Shampoo',
        'Conditioner',
        'Haargel',
        'Haarkleuring',
        'Haarspray',
        'Maskers'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->categories as $category) {
            ProductCategory::create([
                'name' => $category
            ]);
        }
    }
}
