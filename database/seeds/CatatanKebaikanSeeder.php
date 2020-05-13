<?php

use Illuminate\Database\Seeder;
use App\CatatanKebaikan;
use Carbon\Carbon;

class CatatanKebaikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CatatanKebaikan::insert([
            [
                'user_id'               => '2',
                'jenis'                 => 'Baik',
                'kegiatan'              => 'Membereskan sampah dikelas',
                'keterangan'            => 'Pada pagi itu saya melihat kelas berantakan dan banyak sampah, jadi saya membereskannya',
                'tanggal'               => '2020-01-05',
                'created_at' => \Carbon\Carbon::createFromDate(2020,01,01)->toDateTimeString()
            ],
            [
                'user_id'               => '2',
                'jenis'                 => 'Buruk',
                'kegiatan'              => 'Menyerakkah sampah dikelas',
                'keterangan'            => 'Pada pagi itu saya melihat kelas berantakan dan banyak sampah, jadi saya membiarkannya' ,
                'tanggal'               => '2020-01-05',
                'created_at' => \Carbon\Carbon::createFromDate(2020 ,01,01)->toDateTimeString()
            ],
            [
                'user_id'               => '1',
                'jenis'                 => 'Buruk',
                'kegiatan'              => 'tit',
                'keterangan'            => 'Pada pagi itu saya melihat kelas berantakan dan banyak sampah, jadi saya membiarkannya' ,
                'tanggal'               => '2020-01-05',
                'created_at' => \Carbon\Carbon::createFromDate(2020 ,01,01)->toDateTimeString()
            ],
            [
                'user_id'               => '1',
                'jenis'                 => 'Baik',
                'kegiatan'              => 'tot',
                'keterangan'            => 'Pada pagi itu saya melihat kelas berantakan dan banyak sampah, jadi saya membiarkannya' ,
                'tanggal'               => '2020-01-05',
                'created_at' => \Carbon\Carbon::createFromDate(2020 ,01,01)->toDateTimeString()
            ],
            [
                'user_id'               => '3',
                'jenis'                 => 'Baik',
                'kegiatan'              => 'ohok',
                'keterangan'            => 'Pada pagi itu saya melihat kelas berantakan dan banyak sampah, jadi saya membiarkannya' ,
                'tanggal'               => '2020-01-05',
                'created_at' => \Carbon\Carbon::createFromDate(2020 ,01,01)->toDateTimeString()
            ],
        ]);
    }
}
