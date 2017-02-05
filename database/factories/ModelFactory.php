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
        'firstname' => $faker->firstName(),
        'lastname' => $faker->lastName(),
        'password' => bcrypt(123),
        //con safeEmail genera email falsos que no van a funcionar
        //con email genera alguno que puede ser bueno
        'email' => $faker->unique()->safeEmail,
        'rol' =>    $faker->randomElement([
            'Profesor',
            'AlumnoESO',
            'AlumnoBach',
            'AlumnoFP']),

        'token' => bcrypt(date('YmdHms'))

    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
   //static $password;
    //con safeEmail genera email falsos que no van a funcionar
    //con email genera alguno que puede ser bueno
    return [
        'firstname' => $faker->firstName(),
        'lastname' => $faker->lastName(),
        'password' => bcrypt(123),
        'email' => $faker->unique()->safeEmail,
        'token' => bcrypt(date('YmdHms')),

        'rol' =>    $faker->randomElement([
            'Profesor',
            'AlumnoESO',
            'AlumnoBach',
            'AlumnoFP']),
        ];
});
