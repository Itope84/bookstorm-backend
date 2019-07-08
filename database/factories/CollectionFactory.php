<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Collection;
use Faker\Generator as Faker;

$factory->define(Collection::class, function (Faker $faker) {
    return [
        "material_id" => \App\Material::inRandomOrder()->take(1)->first()
    ];
});
