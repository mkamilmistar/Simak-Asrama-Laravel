<?php

use Illuminate\Database\Seeder;
use App\CatatanAmaliyah;
use Carbon\Carbon;

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
                'keterangan'            => 'tiap malan',
                'jumlah'                => 2,
                'created_at'            => \Carbon\Carbon::now(),
                'updated_at'            => \Carbon\Carbon::now()
            ],
            [
                'jenisAmalan_id'        => 2,
                'user_id'               => 2,
                'keterangan'            => 'tiap malan',
                'jumlah'                => 4,
                'created_at'            => \Carbon\Carbon::now(),
                'updated_at'            => \Carbon\Carbon::now()
            ],
            [
                'jenisAmalan_id'        => 2,
                'user_id'               => 3,
                'keterangan'            => 'tiap malan',
                'jumlah'                => 0,
                'created_at'            => \Carbon\Carbon::now(),
                'updated_at'            => \Carbon\Carbon::now()
            ],
            [
                'jenisAmalan_id'        => 1,
                'user_id'               => 3,
                'keterangan'            => 'tiap malan',
                'jumlah'                => 1,
                'created_at'            => \Carbon\Carbon::now(),
                'updated_at'            => \Carbon\Carbon::now()
            ],
            
        ]);
    }
}