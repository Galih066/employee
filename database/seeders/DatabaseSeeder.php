<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\JenjangSeeder;
use Database\Seeders\ReligionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ReligionSeeder::class,
            JenjangSeeder::class,
        ]);
        // User::factory(10)->create();
    }
}
