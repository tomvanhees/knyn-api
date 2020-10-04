<?php

use Database\Seeders\Tenant\BrandSeeder;
use Database\Seeders\Tenant\CategorySeeder;
use Database\Seeders\Tenant\InformationSeeder;
use Database\Seeders\Tenant\QuestionsSeeder;
use Database\Seeders\Tenant\GallerySeeder;
use Illuminate\Database\Seeder;
class TenantSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           GallerySeeder::class,
           QuestionsSeeder::class,
           InformationSeeder::class,
           BrandSeeder::class,
           CategorySeeder::class
       ]);
    }

}
