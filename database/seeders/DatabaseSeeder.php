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
        $this->call([
            rolesSeeder::class,
            userSeeder::class,
            refjenisSeeder::class,
            kegiatanSeeder::class,
            kuesionerSeeder::class,
            unitSeeder::class,
            unitkompetensiSeeder::class,
        ]);
    }
}
