<?php

use Faker\Generator as Faker;
use App\Login;

$factory->define(Login::class, function (Faker $faker) {
    return [
    	"mail" => $faker->freeEmail,
    	"password" => $faker->password
    ];
});
