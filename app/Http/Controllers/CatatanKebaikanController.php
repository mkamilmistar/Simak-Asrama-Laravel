<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatatanKebaikanController extends Controller
{
    public function viewPageCatatanKebaikanSiswa()
    {
        return view('catatanKebaikanSiswa');
    }

    public function viewPageTambahCatatanKebaikanSiswa()
    {
        return view('tambahCatatanKebaikanSiswa');
    }
}
