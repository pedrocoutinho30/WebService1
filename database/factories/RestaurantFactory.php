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

$factory->define(App\Restaurant::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'localizacao' => "$faker->address, $faker->buildingNumber",
        'longitude'=> $faker->longitude,
        'latitude'=> $faker->latitude,
        'capacidade'=> $faker->randomDigitNotNull,
        'horario'=> "11:00, 23:00"
    ];
});
