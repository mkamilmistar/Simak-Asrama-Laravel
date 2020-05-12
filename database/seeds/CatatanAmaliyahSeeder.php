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
                'jenisAmalan_id'        => 1,
                'user_id'               => 2,
                'tanggal'               => '10/10/2020',
                'keterangan'            => 'tiap malan',
            ],
            [
                'jenisAmalan_id'        => 2,
                'user_id'               => 2,
                'tanggal'               => '10/10/2020',
                'keterangan'            => 'tiap malan',
            ],
            [
                'jenisAmalan_id'        => 2,
                'user_id'               => 3,
                'tanggal'               => '10/10/2020',
                'keterangan'            => 'tiap malan',
            ],
            [
                'jenisAmalan_id'        => 1,
                'user_id'               => 3,
                'tanggal'               => '10/10/2020',
                'keterangan'            => 'tiap malan',
            ],
            
        ]);
    }
}
