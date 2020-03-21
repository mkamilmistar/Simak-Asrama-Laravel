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
}
