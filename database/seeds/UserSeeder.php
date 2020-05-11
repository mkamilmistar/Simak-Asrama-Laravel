<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Siswa;
use App\Guru;
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
                'tanggal_lahir'     => '01/02/1999'
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
                'tanggal_lahir'     => '12/03/1998'
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
                'tanggal_lahir'     => '01/02/1999'
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
                'tanggal_lahir'     => '01/02/1999'
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
                'tanggal_lahir'     => '01/02/1999'
            ],
        ]);

        Siswa::insert([
            [
                'user_id'           => '2',
                'NIS'               => '11111',
                'kelas'             => 'IX-A',
                'gedung_asrama'     => 'Putra',
                'kamar_id'          => '227',
            ],
            [
                'user_id'           => '3',
                'NIS'               => '12345',
                'kelas'             => 'IX-B',
                'gedung_asrama'     => 'Putra',
                'kamar_id'          => '220',
            ],
            [
                'user_id'           => '4',
                'NIS'               => '12341',
                'kelas'             => 'X-C',
                'gedung_asrama'     => 'Putri',
                'kamar_id'          => '223',
            ],
            [
                'user_id'           => '5',
                'NIS'               => '22341',
                'kelas'             => 'X-C',
                'gedung_asrama'     => 'Putra',
                'kamar_id'          => '225',
            ],                  
        ]);

        Guru::insert([
            [
                'user_id'           => '1',
                'NIP'               => '11111',
                'noHP'              => '089674851231',
            ],
        ]);

      
    }
}
