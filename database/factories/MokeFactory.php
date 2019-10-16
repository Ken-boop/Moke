<?php

use Faker\Generator as Faker;
use Phaza\LaravelPostgis\Geometries\Point;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
        'location'     => new Point($faker->latitude, $faker->longitude),
    ];
});
