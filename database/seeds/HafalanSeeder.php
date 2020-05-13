<?php

use Illuminate\Database\Seeder;
use App\Hafalan;

class HafalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hafalan::insert([
            [
                'tanggal'       =>  now(),
                'pm'            =>  'Pagi',
                'tm'            =>  'Tahfidz',
                'surat'         =>  '1',
                'ayat0'         =>  '1',
                'ayat1'         =>  '7',
                'nilai'         =>  '9',
                'pembina_id'    =>  '1',
                'siswa_id'      =>  '1',
            ],
            [
                'tanggal'       =>  now(),
                'pm'            =>  'Pagi',
                'tm'            =>  'Tahfidz',
                'surat'         =>  '2',
                'ayat0'         =>  '1',
                'ayat1'         =>  '250',
                'nilai'         =>  '9',
                'pembina_id'    =>  '1',
                'siswa_id'      =>  '2',
            ],

        ]);
    }
}
