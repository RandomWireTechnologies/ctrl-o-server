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
        'company' => $faker->company,
        'phone' => $faker->phoneNumber,
        'address_street' => $faker->streetAddress,
        'address_unit' => $faker->secondaryAddress,
        'address_city' => $faker->city,
        'address_state' => $faker->stateAbbr,
        'address_zipcode' => $faker->postcode,
    ];
});

$factory->define(App\Card::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->regexify('(Card|Fob) #\d\d'),
        'user_id' => factory(App\User::class)->create()->id,
        'serial' => substr($faker->sha1, 0, 7),
        'hash' => $faker->sha1,
        'enabled' => $faker->boolean,
    ];
});

$factory->define(App\Node::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->regexify('(Front |Back |Side |Bottom |Top )?(Main|Stair|Woodshop|Machineshop|Paintbooth|Secret) Door'),
        'type' => $faker->regexify('(INTERIOR|EXTERIOR)_DOOR'),
        'enabled' => $faker->boolean,
    ];
});

$factory->define(App\Schedule::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence(2),
    ];
});


$factory->define(App\Membership::class, function (Faker\Generator $faker) {
    return [
        'owner_id' => factory(App\User::class)->create()->id,
        'membershiptype_id' => factory(App\MembershipType::class)->create()->id,
        'name' => $faker->sentance(2),
    ];
});

$factory->define(App\MembershipCredit::class, function (Faker\Generator $faker) {
    return [
        'membership_id' => factory(App\Membership::class)->create()->id,
        'membership_subscription_id' => factory(App\MembershipSubscription::class)->create()->id,
        'price_paid' => $faker->randomFloat(2,0.0,1000.00),
        'payment_type' => $faker->randomElement(['cash','credit_card','paypal','paypal_subscription']),
        'purchased_at' => Carbon::instance($faker->dateTime())->toDateTimeString(),
        'begins_at' => Carbon::instance($faker->dateTime())->toDateTimeString(),
        'ends_at' => Carbon::instance($faker->dateTime())->toDateTimeString()
    ];
});

$factory->define(App\MembershipSubcription::class, function (Faker\Generator $faker) {
    return [
        'membership_id' => factory(App\Membership::class)->create()->id,
        'name' => $faker->sentance(2),
        'paypal_subscription_id' => $faker->regexify('[A-Z0-9-]{12}'),
    ];
});


$factory->define(App\MembershipType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentance(2),
        'duration' => $faker->numberBetween(1,31),
        'duration_unit' => $faker->randomElement(['day','month','week','year']),
        'max_users' => $faker->numberBetween(1,10),
        'price' => $faker->randomFloat(2,0.0,1000.00),
        'price_2' => $faker->randomFloat(2,0.0,1000.00),
    ];
});

