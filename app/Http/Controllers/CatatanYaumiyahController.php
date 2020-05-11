<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Siswa;

class CatatanYaumiyahController extends Controller
{
    public function viewPagePembina()
    {
        if(Auth::user()->role=='pembina'){
            $data_user = User::where('role','=','siswa')->with('siswa')->get();
            // dd($data_user);
        }else{
            return redirect()->back();
        }
        
        return view('catatanAmalanYaumiyah.catatanAmalanPembina', compact(['data_user']));
    }
    
    public function viewPageTambahCatatanAmalanSiswa()
    {
        return view('tambahCatatanAmalanSiswa');
    }

    public function viewPageSiswa()
    {
        // $dataAmalanSiswa = 
        return view('catatanAmalanPembina');
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
