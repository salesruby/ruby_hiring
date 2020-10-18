<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Candidate::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);

    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'country' => $faker->country,
        'state' =>$faker->state,
        'city' => $faker->city,
        'gender' =>  $gender,
        'email' => $faker->email,
        'phonenumber' => $faker->phoneNumber,
        'cv' => $faker->word,
        'industry' => $faker->word,
        'job_title' => $faker->text(20),
        'experience' => $faker->numberBetween(1, 10)
    ];
});
