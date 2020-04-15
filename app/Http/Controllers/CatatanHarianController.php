<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatatanHarianController extends Controller
{
    public function viewPageCatatan()
    {
        return view('catatanHarian');
    }

    public function viewPageTambahCatatan()
    {
        return view('tambahCatatanHarian');
    }
}
