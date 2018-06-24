<?php

use Faker\Generator as Faker;
use App\Register;

$factory->define(Register::class, function (Faker $faker) {
 $rand = rand(0, 1);
    if ($rand == 1) {
        $gender = true;
    }else{
    	$gender = false;
    }
    return [
        'title' => $faker->name,
        'mail' => $faker->freeEmail,
        'phone' => $faker->phoneNumber,
        'gender' => $gender,
        'username' => $faker->freeEmail,
        'password' => $faker->password
    ];
});
