<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisAmalanController extends Controller
{
    public function viewPageJenisAmalan()
    {
        return view('catatanAmalanYaumiyah.jenisCatatan');
    }
    
}
