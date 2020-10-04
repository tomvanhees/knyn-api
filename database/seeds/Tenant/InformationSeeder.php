<?php

namespace Database\Seeders\Tenant;

use App\Models\Information;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information::create([
            'hours' => [
                "monday" => "gesloten",
                "tuesday" => "9uur tot 17uur",
                "wednesday" => "9uur tot 17uur",
                "thursday" => "9uur tot 20uur (Op afspraak)",
                "friday" => "9uur tot 17uur",
                "saturday" => "9uur tot 5uur",
                "sunday" => "gesloten"
            ],
            'social_media' => [
                'facebook' => '',
                'instagram' => ''
            ]
        ]);
    }
}
