<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Material;
use Faker\Generator as Faker;

$factory->define(Material::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::inRandomOrder()->take(1)->first()->id,
        'course_id' => \App\Course::inRandomOrder()->take(1)->first()->id,
        'description' => $faker->realText,
        'type' => Material::MATERIAL_TYPES[rand(0, count(Material::MATERIAL_TYPES) - 1)]
    ];
});
