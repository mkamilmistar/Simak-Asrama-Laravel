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
                'bobotAmalan'          =>  10,
            ],
            [
                'jenisAmalan'          => 'Sholat Tahajud',
                'bobotAmalan'          =>  20,
            ],
            [
                'jenisAmalan'          => 'Membaca Yasin di Malam Jumat',
                'bobotAmalan'          =>  15,
            ],
            
        ]);
    }
}
