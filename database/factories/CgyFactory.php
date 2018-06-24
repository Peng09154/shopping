<?php

use Faker\Generator as Faker;
use App\Cgy;

$factory->define(Cgy::class, function (Faker $faker) {
	$rand = rand(0, 1);
    if ($rand == 1) {
        $enabled = true;
    }else{
        $enabled = false;
    }
    return [
    	'title' => $faker->word,
        'enabled' =>$enabled,
        'sort' => $faker->numberBetween(0, 10)
    ];
});
