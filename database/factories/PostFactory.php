<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Post::class, function (Faker $faker) {
    $summary = '';
    for ($i = 0; $i < 3; $i++)
    {
        $summary .= '<p>' . $faker->paragraph . '</p>';
    }

    $body = $summary;

    for ($i = 0; $i < 5; $i++)
    {
        $body .= '<p>' . $faker->paragraph . '</p>';
    }

    return [
        'title' => $faker->sentence,
        'summary' => $summary,
        'body' => $body,
        'category_id' => $faker->numberBetween(1, 4),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
