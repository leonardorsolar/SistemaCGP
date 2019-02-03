<?php

use Faker\Generator as Faker;

$factory->define(App\Entities\Classe::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
    ];
});
