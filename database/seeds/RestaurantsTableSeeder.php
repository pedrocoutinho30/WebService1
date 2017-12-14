<?php

use Illuminate\Database\Seeder;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant')->insert([
            'name' => str_random(30),
            'morada' => str_random(50)
        ]);
    }
}
