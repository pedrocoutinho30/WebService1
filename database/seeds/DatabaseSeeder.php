<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('RestaurantsTableSeeder');
        $this->call('EmentasTableSeeder');
        $this->call('ClientesTableSeeder');
        $this->call('ReservasTableSeeder');
    }
}
