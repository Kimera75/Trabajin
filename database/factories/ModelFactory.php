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


$factory->define(SS\myModel\Article::class, function (Faker\Generator $faker) {
    return [
        'id'=>$faker->numerify('Art####'),
        'name' => $faker->sentence(3,true),
        'description'=>$faker->paragraph(4,true),
        'quantity'=>$faker->numberBetween(1,15),
        'last_date_loan'=>$faker->dateTimeBetween('-21 days', '+5 days', date_default_timezone_get()),
    ];
});


$factory->define(SS\myModel\Articles_category::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->numerify('ArCa###'),
        'name' => $faker->sentence(5,true),
        
    ];
});


$factory->define(SS\myModel\Career::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->numerify('Ca###'),
        'name' => $faker->sentence(3,true),
        
    ];
});

$factory->define(SS\myModel\Types_sanction::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->unique()->randomDigitNotNull,   
        'name' => $faker->sentence(3,true),
        'description' => $faker->paragraph(3,true),
        'appliying_days' => $faker->randomDigitNotNull(),
        'amount_payable' => $faker->numberBetween(1.0,100.00),
    ];
});

$factory->define(SS\myModel\User::class, function (Faker\Generator $faker) {
    return [
       'id'=>$faker->numerify('User#####'),
        'name' => $faker->name,        
        'num_sanctions'=>$faker->numberBetween(1,4),
        'locked_loans'=> $faker->randomElement(array('Si','No')),
        'active'=> $faker->randomElement(['Si','No']),
        'role'=> $faker->randomElement(['Estudiante','Docente']),
        'e_mail'=> $faker->safeEmail(),
    ];
});


$factory->define(SS\myModel\Loans_head::class, function (Faker\Generator $faker) {
    return [
        'start_date_loan' => $faker->dateTimeBetween('-3 days', '+4 days', date_default_timezone_get()),
        'end_date_loan' => $faker->dateTimeBetween('-5 days', '+7 days', date_default_timezone_get()),
        'type_loan'=> $faker->randomElement(['Interno','Externo']),
        'state'=>$faker->randomElement(['EnCurso','Incompleto','Completo','ETarde']),

    ];
});


