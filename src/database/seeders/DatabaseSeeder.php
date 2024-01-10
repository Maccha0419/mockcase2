<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ShopsSeeder::class);
        // $this->call(ShopAreasSeeder::class);
        // $this->call(ShopGenresSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
