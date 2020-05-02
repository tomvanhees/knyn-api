<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Organisation\Organisation;

$factory->define(Organisation::class, function (Faker $faker) {
    return [
        "name" => $faker->company
    ];
});
