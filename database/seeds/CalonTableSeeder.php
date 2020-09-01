<?php

use Illuminate\Database\Seeder;
use App\Calon;

class CalonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Calon::class, 3)->create();
    }
}
