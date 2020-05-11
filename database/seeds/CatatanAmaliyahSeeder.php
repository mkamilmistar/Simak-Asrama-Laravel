<?php

use Illuminate\Database\Seeder;
use App\CatatanAmaliyah;


class CatatanAmaliyahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CatatanAmaliyah::insert([
            [
                'catatanAmaliyah_id'    => 1,
                'jenis_amalan'          => 'Sholat dhuha',
                'bobot_amalan'          =>  10,
                'keterangan'            => 'tiap malan'
            ],
            [
                'catatanAmaliyah_id'    => 1,
                'jenis_amalan'          => 'Sholat tahajud',
                'bobot_amalan'          =>  20,
                'keterangan'            => 'tiap malan'
            ],
            
        ]);
    }
}
