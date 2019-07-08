<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase,
        'course_code' => $faker->unique()->bothify('???') . rand(1, 4) . rand(0, 5) .rand(0, 9),
        'description' => $faker->realText
    ];
});
