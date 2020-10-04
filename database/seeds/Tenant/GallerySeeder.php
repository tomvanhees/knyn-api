<?php

namespace Database\Seeders\Tenant;

use App\Models\Gallery\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GallerySeeder extends Seeder
{
    private $gallerynames = [
        'mannen', 'kinderen', 'lang haar', 'kort haar', 'gekleurd haar'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->gallerynames as $name) {
            Gallery::create([
                'name' => $name,
                'slug' => Str::slug($name)
            ]);
        }
    }
}
