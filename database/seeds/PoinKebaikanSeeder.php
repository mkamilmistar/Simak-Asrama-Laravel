<?php

use Illuminate\Database\Seeder;
use App\PoinKebaikan;

class PoinKebaikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PoinKebaikan::insert([
            [
                'jenis'         => 'keburukan',
                'keterangan'    => 'Tidak tahu',
                'tanggal'       =>  now(),
                'poin'          =>  50,
                'siswa_id'       =>  1,
            ],
            [
                'jenis'         => 'keburukan',
                'keterangan'    => 'Tidak damn',
                'tanggal'       =>  now(),
                'poin'          =>  50,
                'siswa_id'       =>  1,
            ],
            [
                'jenis'         => 'keburukan',
                'keterangan'    => 'Tidak welp',
                'tanggal'       =>  now(),
                'poin'          =>  50,
                'siswa_id'       =>  1,
            ],
            [
                'jenis'         => 'kebaikan',
                'keterangan'    => 'Tidak tahu',
                'tanggal'       =>  now(),
                'poin'          =>  25,
                'siswa_id'       =>  1,
            ]

        ]);
    }
}
