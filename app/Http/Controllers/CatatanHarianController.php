<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatatanHarianController extends Controller
{
    public function viewPageCatatan()
    {
        //$catHarian = \App\CatatanHarian::all();
    return view('catatanHarian'/*, ['catHarian' -> $catHarian]*/);
    }

    public function viewPageTambahCatatan()
    {
        return view('tambahCatatanHarian');
    }
}
