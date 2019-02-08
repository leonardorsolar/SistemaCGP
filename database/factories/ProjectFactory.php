<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
        'area_projects_id' => $faker->buildingNumber (1),
    ];
});
