<?php

use Illuminate\Database\Seeder;
use App\JenisAmalanYaumiyah;

class JenisAmalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisAmalanYaumiyah::insert([
            [
                'jenisAmalan'          => 'Sholat dhuha',
                'keterangan'           => 'kegiatan yang dilakukan setiap pagi',
                'bobotAmalan'          =>  10,
            ],
            [
                'jenisAmalan'          => 'Sholat Tahajud',
                'keterangan'           => 'kegiatan yang dilakukan setiap malam',
                'bobotAmalan'          =>  20,
            ],
            [
                'jenisAmalan'          => 'Membaca Yasin di Malam Jumat',
                'keterangan'           => 'kegiatan yang dilakukan setiap malam jumat',
                'bobotAmalan'          =>  15,
            ],
            
        ]);
    }
}
