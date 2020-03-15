<?php

use Illuminate\Database\Seeder;
use App\CatatanAmaliyah;
use App\Catatan;
use App\Siswa;
use App\PembinaAsrama;

class CatatanAmaliyahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PembinaAsrama::insert([
            [
                'NIP'                   => 000000,
                'role_id'               => 1
            ],
        ]);

        Siswa::insert([
            [
               'NIS'                    => 111111,
                'gedung_asrama'         => 'Kucing',
                'kamar_id'              => 222,
                'role_id'               => 0,
            ],
            
        ]);

        // Catatan::insert([
        //     [
        //        'catatan_id'             => 1,
        //        'laporan_id'             => 1,
        //     ],
        //     [
        //         'catatan_id'             => 2,
        //         'laporan_id'             => 2,
        //     ],
            
        // ]);

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
