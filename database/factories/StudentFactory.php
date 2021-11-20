<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'lastname' => $faker->lastname,
        'firstname' => $faker->firstname,
        'course' => $faker->sentence(),
        'year' => $faker->sentence()
    ];
});
