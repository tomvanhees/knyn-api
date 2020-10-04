<?php

namespace Database\Seeders\Tenant;

use App\Models\Product\ProductBrand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    private $brands = [
        'Rick Ross',
        'Aloxxi',
        'Argan secret',
        'BARBER',
        'American crew'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->brands as $brand) {
            ProductBrand::create([
                'name' => $brand
            ]);
        }
    }
}
