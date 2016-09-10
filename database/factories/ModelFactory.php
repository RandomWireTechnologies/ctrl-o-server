<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Card::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'user_id' => factory(App\User::class)->create()->id,
        'serial' => substr($faker->sha1, 0, 7),
        'hash' => $faker->sha1,
        'enabled' => $faker->boolean,
    ];
});

$factory->define(App\Node::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'type' => $faker->name,
        'enabled' => $faker->boolean,
    ];
});

$factory->define(App\Schedule::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});
