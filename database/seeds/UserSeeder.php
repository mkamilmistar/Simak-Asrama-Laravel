<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Siswa;
use App\PembinaAsrama;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'username'          => 'pembina',
                'password'          => bcrypt("pembina123"),
                'email'             => 'pembina@gmail.com',
                'nama'              => 'Pembina',
                'jenis_kelamin'     => 'Laki-Laki',
                'tempat_lahir'      => 'Jonggol',
                'alamat'            => 'Jonggol',
                'role'              => 'pembina',
            ],
            [
                'username'          => 'siswa',
                'password'          => bcrypt("siswa123"),
                'email'             => 'siswa@gmail.com',
                'nama_'             => 'Siswa',
                'jenis_kelamin'     => 'Laki-Laki',
                'tempat_lahir'      => 'Jonggol',
                'alamat'            => 'Jonggol',
                'role'              => 'siswa',
            ],
        ]);

        Siswa::insert([
            [
                'user_id'          => '2',
                'NIS'               => '11111',
                'gedung_asrama'     => 'putra',
                'kamar_id'          => '227',

            ],
        ]);
        pembinaAsrama::insert([
            [
                'user_id'          => '1',
                'NIP'               => '11111',
            ],
        ]);
    }
}
