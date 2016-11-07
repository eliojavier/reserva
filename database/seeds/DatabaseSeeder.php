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
        $this->call(CountriesTableSeeder::class);

        factory(App\User::class, 50)->create()->each(function() {
            (factory(App\User::class)->make());
        });
    }
}
