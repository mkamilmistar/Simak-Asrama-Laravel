<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisAmalanYaumiyah;

class JenisAmalanController extends Controller
{
    public function viewPageJenisAmalan()
    {
        $jenisAmalan = JenisAmalanYaumiyah::all();

        // dd($jenisAmalan);
        return view('catatanAmalanYaumiyah.jenisAmalan', compact('jenisAmalan'));
    }
    
}
