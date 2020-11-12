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

$factory->define(App\Models\CupAnagContatto::class, function (Faker $faker) {
    $fakerIt = FakerFactory::create('it_IT');

    $contattoModel = new App\Models\CupAnagContatto();
    $tipoArray = \Gecche\DBHelper\Facades\DBHelper::helper($contattoModel->getConnectionName())->listEnumValues('tipo','cup_anag_contatti');

    $tipo = \Illuminate\Support\Arr::random($tipoArray);


    switch ($tipo) {
        case 'email':
            $value = $fakerIt->email;
            break;
        case 'cellulare':
            $value = $fakerIt->phoneNumber;
            break;
        case 'telefono':
        case 'fax':
            $value = $fakerIt->phoneNumber;
            break;
        case 'url':
            $value = $fakerIt->url;
            break;
        default:
            $value = $fakerIt->words(2);
            break;

    }


    return [
        'tipo' => $tipo,
        'value' => $value,
        'label' => rand(1,100) > 40 ? $fakerIt->words(2) : null,
    ];
});
