<?php

use Illuminate\Database\Seeder;
use App\HafalanDoaHadist;

class HafalanDoaHadistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HafalanDoaHadist::insert([
            [
                'tanggal'       =>  now(),
                'pm'            =>  'Pagi',
                'doa'           =>  'Doa Mau Tidur',
                'hadist'        =>  '',
                'nilai'         =>  '9',
                'pembina_id'    =>  '1',
                'siswa_id'      =>  '1',
            ],
            [
                'tanggal'       =>  now(),
                'pm'            =>  'Pagi',
                'doa'           =>  'Doa Mau Makan',
                'hadist'        =>  '',
                'nilai'         =>  '9',
                'pembina_id'    =>  '1',
                'siswa_id'      =>  '1',
            ],
            [
                'tanggal'       =>  now(),
                'pm'            =>  'Pagi',
                'doa'           =>  '',
                'hadist'        =>  'HR:Bukhori 193',
                'nilai'         =>  '9',
                'pembina_id'    =>  '1',
                'siswa_id'      =>  '1',
            ],

        ]);
    }
}
