<?php

use Faker\Generator as Faker;

$factory->define(App\Dog::class, function (Faker $faker) {
    return [
    	'user_id' => $faker->numberBetween($min = 1, $max = 20),
        'name' => $faker->name,
        'gender' => $faker->numberBetween($min = 0, $max = 1), // secret
        'race' => $faker->name,
        'age' => $faker->numberBetween($min = 1, $max = 10),
        'lat' => $faker->numberBetween($min = 35.00000000000000, $max = 50.00000000000000),
        'lng' => $faker->numberBetween($min = -50.00000000000000, $max = 50.00000000000000),
    ];
});
