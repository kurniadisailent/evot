<?php

use Illuminate\Database\Seeder;
use App\Pemilih;

class PemilihTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pemilih::class, 100)->create();
    }
}
