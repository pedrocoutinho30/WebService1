<?php

use Illuminate\Database\Seeder;

class EmentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ementa::class, 10)->create();
    }
}
