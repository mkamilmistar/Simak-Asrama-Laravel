<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Siswa;
use App\Guru;
use App\User;
use App\CatatanHarian;
use App\CatatanKebaikan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Auth::user()->id;
        if(Auth::user()->role=='pembina'){
            $data_user = User::where('role', 'siswa')->get();
        }else{
            $data_user = Auth::user();
            return redirect()->back();
        }
        $siswa = Siswa::all();
        $catatanKebaikan = CatatanKebaikan::where([
            ['user_id', Auth::user()->id],
            ['jenis', 'Baik'],
        ])->get();
        
        $catatanKeburukan = CatatanKebaikan::where([
            ['user_id', $userId],
            ['jenis', 'Buruk'],
        ])->get();

        $catatanHarianP = CatatanHarian::where([
            ['siswa_id', Auth::user()->id],
            ['kategori', 'Prestasi'],
        ])->get();
        
        $catatanHarianI = CatatanHarian::where([
            ['siswa_id', $userId],
            ['kategori', 'Indisipliner'],
        ])->get();
        
        $title= 'Beranda | Sistem Informasi Asrama SCB';
        return view('dashboard',  compact(['title','data_user','catatanKebaikan','catatanKeburukan', 'catatanHarianP', 'catatanHarianI']));
    }
}