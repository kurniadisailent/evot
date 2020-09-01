<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Calon;
use Faker\Generator as Faker;

$factory->define(Calon::class, function (Faker $faker) {
    return [
        'nama_ketua'=>$faker->name,
        'nama_wakil'=>$faker->name,
        'kelas_ketua'=>$faker->randomElement(['XII RPL A','XII RPL B','XII RPL C']),
        'kelas_wakil'=>$faker->randomElement(['XII RPL A','XII RPL B','XII RPL C']),
        'foto'=>'noimg.png',
        'visi'=>$faker->text,
        'misi'=>$faker->text,
        'jumlah_suara'=>'0',
    ];
});
