<?php

use Faker\Generator as Faker;
use Faker\Factory as FakerFactory;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\CupAnagIndirizzo::class, function (Faker $faker) {
    $fakerIt = FakerFactory::create('it_IT');

    $countComuni = \App\Models\CupGeoComune::count();

    $comuneId =  rand(1, $countComuni);

    $comune = \App\Models\CupGeoComune::find($comuneId);


    return [
        'indirizzo' => $fakerIt->address,
        'cap' => $fakerIt->postcode,
        'comune_id' => $comuneId,
        'localita' => $fakerIt->city,
        'numero_civico' => rand(1, 100),
        'persona_contatto' => rand(1, 100) > 80 ? $fakerIt->firstName . ' ' . $fakerIt->lastName : null,
        'note' => rand(1, 100) > 80 ? $fakerIt->words(5, true) : null,
    ];
});
