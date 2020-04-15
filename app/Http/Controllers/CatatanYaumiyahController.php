<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatatanYaumiyahController extends Controller
{
    public function viewPageSiswa()
    {
        return view('catatanAmalanSiswa');
    }
    
    public function viewPageTambahCatatanAmalanSiswa()
    {
        return view('tambahCatatanAmalanSiswa');
    }

    public function viewPagePembina()
    {
        // $dataAmalanSiswa = 
        // return view('catatanAmalanPembina');
    }

    public function viewPageTambahJenisAmalan()
    {
        return view('tambahJenisAmalan');
    }

    public function viewPageCatatanAmalanSiswa()
    {
        return view('catatanAmalanSiswa');
    }

    public function viewPageJenisAmalan()
    {
        return view('jenisAmalanSiswa');
    }
}
