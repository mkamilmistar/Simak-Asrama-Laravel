<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Siswa;
use App\PembinaAsrama;
use App\Catatan;
use App\CatatanAmaliyah;

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
                'nama'              => 'Ujang',
                'jenis_kelamin'     => 'Laki-Laki',
                'tempat_lahir'      => 'Jonggol',
                'alamat'            => 'Jonggol',
                'role'              => 'pembina',
            ],
            [
                'username'          => 'siswa',
                'password'          => bcrypt("siswa123"),
                'email'             => 'siswa@gmail.com',
                'nama'             => 'Amin',
                'jenis_kelamin'     => 'Laki-Laki',
                'tempat_lahir'      => 'Jonggol',
                'alamat'            => 'Jonggol',
                'role'              => 'siswa',
            ],
            [
                'username'          => 'siswa1',
                'password'          => bcrypt("siswa123"),
                'email'             => 'siswa1@gmail.com',
                'nama'             => 'Mursyid',
                'jenis_kelamin'     => 'Laki-Laki',
                'tempat_lahir'      => 'Jonggol',
                'alamat'            => 'Jonggol',
                'role'              => 'siswa',
            ],
            [
                'username'          => 'siswa2',
                'password'          => bcrypt("siswa123"),
                'email'             => 'siswa2@gmail.com',
                'nama'             => 'Yayak',
                'jenis_kelamin'     => 'Perempuan',
                'tempat_lahir'      => 'Jonggol',
                'alamat'            => 'Jonggol',
                'role'              => 'siswa',
            ],
            [
                'username'          => 'siswa3',
                'password'          => bcrypt("siswa123"),
                'email'             => 'siswa3@gmail.com',
                'nama'             => 'Satria',
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
                'gedung_asrama'     => 'Putra',
                'kamar_id'          => '227',
            ],
            [
                'user_id'          => '3',
                'NIS'               => '12345',
                'gedung_asrama'     => 'Putra',
                'kamar_id'          => '220',
            ],
            [
                'user_id'          => '4',
                'NIS'               => '12341',
                'gedung_asrama'     => 'Putri',
                'kamar_id'          => '223',
            ],
            [
                'user_id'          => '2',
                'NIS'               => '12342',
                'gedung_asrama'     => 'Putra',
                'kamar_id'          => '221',
            ],
            
        ]);

        pembinaAsrama::insert([
            [
                'user_id'          => '1',
                'NIP'               => '11111',
            ],
        ]);

        Catatan::insert([
            [
                'jenis_catatan'     => 'catatanAmaliyah'
            ],
        ]);

        CatatanAmaliyah::insert([
            [
                'catatan_id'        => '1',
                'siswa_id'          => '1',
                'jenis_amalan'      => 'Sholat Tahajud',
                'bobot_amalan'      => 10,
            ],
            [
                'catatan_id'        => '1',
                'siswa_id'          => '1',
                'jenis_amalan'      => 'Sholat Dhuha',
                'bobot_amalan'      => 20,
            ],
        ]);
    }
}
