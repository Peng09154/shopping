<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
 $rand = rand(0,1);
    if ($rand == 1) {
        $enabled = true;
    }else{
        $enabled = false;
    }
    return [
    	'title' => $faker->word,
        'price' => $faker->numberBetween(30, 1000),
        'stock' => $faker->numberBetween(0, 10),
        'desc' => $faker->sentence,
        'cgy_id' => $faker->numberBetween(0, 5),
        'pic' => $faker->imageUrl(360,720),
        'sort' => $faker->numberBetween(1,5),
        'enabled' => $enabled
    ];
});
