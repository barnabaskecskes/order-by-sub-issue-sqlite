<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Click;
use App\Offer;
use Faker\Generator as Faker;

$factory->define(Click::class, function (Faker $faker) {
    return [
        'offer_id' => function () {
            return factory(Offer::class)->create()->id;
        },
        'ip_address' => $faker->ipv4,
    ];
});
