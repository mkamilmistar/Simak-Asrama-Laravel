<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Siswa;
use App\CatatanAmaliyah;
use App\JenisAmalanYaumiyah;

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
 
    public function viewPageSiswa(Request $request)
    {
        $data_user = Auth::user();

        $catatanAmaliyah = CatatanAmaliyah::where('user_id', Auth::user()->id)->with('jenisAmalanYaumiyah')->get();
        // dd($catatanAmaliyah);

        return view('catatanAmalanYaumiyah.catatanAmalanSiswa', compact(['catatanAmaliyah','data_user']));
    }

    public function viewTambahCatatan()
    {
        $jenisCatatan = JenisAmalanYaumiyah::all();;
        return view('catatanAmalanYaumiyah.tambahCatatanAmalanSiswa', compact(['jenisCatatan']));
    }

    public function postCatatan()
    {
        # code...
    }

}
