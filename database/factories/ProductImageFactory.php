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

$factory->define(App\Models\ProductImage::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->words($nb=2, $asText=true),
//        'url' => $faker->imageUrl($width = 1200, $height = 1600),
        'url' => 'http://www.pngpix.com/wp-content/uploads/2016/10/PNGPIX-COM-T-Shirt-PNG-Transparent-Image-500x491.png'
    ];
});
