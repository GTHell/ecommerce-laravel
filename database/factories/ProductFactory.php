<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->words($nb = 2, $asText = true),
        'sku' => $faker->shuffle($faker->ean13 . $faker->word),
        'description' => $faker->sentence(10, true),
        'supplier_id' => 1,
        'category_id' => $faker->numberBetween($min = 2, $max = 5),
        'unit_price' => $faker->numberBetween($min = 500, $max = 5000),
        'sold' => $faker->biasedNumberBetween($min = 10, $max = 200, function ($x) {
            return 1 - sqrt($x);
        })
    ];
});
