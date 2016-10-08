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
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->userName,
        'permissions' => null,
        'last_login' => null,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});

$factory->define(App\Team::class, function(Faker\Generator $faker){
	return [
		'name' => $faker->name,
	];
});

$factory->define(App\AirsoftSite::class, function(Faker\Generator $faker){
	return [
		'name' => $faker->name,
		'longitude' => $faker->longitude($min = 123, $max = 125),
        'latitude' => $faker->latitude($min = 13, $max = 15),
        'game_fee' => $faker->numberBetween($min = 70, $max = 200),
		'host_id' => factory(App\Team::class)->create()->id,
	];
});