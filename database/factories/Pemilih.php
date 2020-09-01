<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pemilih;
use Faker\Generator as Faker;
use PHPUnit\Framework\TestCase;


$factory->define(Pemilih::class, function (Faker $faker) {
    return [
        'nama_pemilih'=>$faker->name,
        'kelas_pemilih'=>$faker->randomElement(['XII RPL A','XII RPL B','XII RPL C']),
        'jenis_kelamin'=>$faker->randomElement(['Laki-Laki','Perempuan']),
        'username' => $faker->unique()->userName,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'status'=>'BELUM MEMILIH',
        'remember_token' => Str::random(10),
    ];
});
