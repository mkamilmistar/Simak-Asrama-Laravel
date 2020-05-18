<?php

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
            UserSeeder::class,
            CatatanKebaikanSeeder::class,
            JenisAmalanSeeder::class,
            // CatatanAmaliyahSeeder::class,
            PoinKebaikanSeeder::class,
            SuratSeeder::class,
            HafalanSeeder::class,
            HafalanDoaHadistSeeder::class,
        ]);
    }
}