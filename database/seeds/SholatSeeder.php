<?php

use Illuminate\Database\Seeder;
use App\Sholat;

class SholatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sholat::insert([
            [
                'siswa_id'          =>  1,
                'tanggal'           =>  now(),
                'jenis_sholat'      => 'dzuhur',
                'waktu_masuk'       => 1600,
                'waktu_adzan'       => 1530,
                
            ],
            [
                'siswa_id'          =>  2,
                'tanggal'           =>  now(),
                'jenis_sholat'      => 'ashar',
                'waktu_masuk'       => 1600,
                'waktu_adzan'       => 1530,
            ],
            [
                'siswa_id'          =>  3,
                'tanggal'           =>  now(),
                'jenis_sholat'      => 'maghrib',
                'waktu_masuk'       => 1600,
                'waktu_adzan'       => 1530,
            ],
            [
                'siswa_id'          =>  4,
                'tanggal'           =>  now(),
                'jenis_sholat'      => 'isya',
                'waktu_masuk'       => 1600,
                'waktu_adzan'       => 1530,
            ]

        ]);
    }
}
