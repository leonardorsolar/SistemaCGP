<?php

use Faker\Generator as Faker;

$factory->define(App\Entities\TypeProject::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
        //'description' => $faker->sentence(4),
    ];
});
