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

$factory->define(App\Models\ProductReview::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween($min=1, $max=200),
        'user_id' => $faker->numberBetween($min=1, $max=250),
        'rate' => $faker->biasedNumberBetween('1', '5'),
        'comment' => $faker->sentences($nb=3, $asText=true)
    ];
});
