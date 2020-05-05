<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatatanKebaikan;

class CatatanKebaikanController extends Controller
{
    public function viewPageCatatanKebaikanSiswa()
    {
        $catatanKebaikan = CatatanKebaikan::where('jenis', '=', 1)->paginate(5);
        $catatanKeburukan = CatatanKebaikan::where('jenis', '=', 0)->paginate(5);
        return view('catatanKebaikanSiswa', [
            'catatan_kebaikan' => $catatanKebaikan,
            'catatan_keburukan' => $catatanKeburukan
        ]);
    }

    public function viewPageTambahCatatanKebaikanSiswa(Request $request)
    {
        if ($request->id !== NULL) {
            $catatanKebaikan = CatatanKebaikan::find($request->id);
            return view('tambahCatatanKebaikanSiswa', ['catatanKebaikan' => $catatanKebaikan]);
        }
        return view('tambahCatatanKebaikanSiswa', ['catatanKebaikan' => []]);
    }

    public function tambahCatataKebaikan(Request $request)
    {
        // dd($request);
        $catatanKebaikan = new CatatanKebaikan;
        // TODO: laravel built-in validator
        $catatanKebaikan->jenis = $request->jenis;
        $catatanKebaikan->kegiatan = $request->kegiatan;
        $catatanKebaikan->deskripsi = $request->deskripsi;
        $catatanKebaikan->save();

        return redirect()->route('viewCatatanKebaikanSiswa');
    }

    public function hapusCatatanKebaikan(Request $request)
    {
        CatatanKebaikan::destroy($request->id);
        return redirect()->route('viewCatatanKebaikanSiswa');
    }

    public function updateCatataKebaikan(Request $request)
    {
        // dd($request);
        $catatanKebaikan = CatatanKebaikan::find($request->id);
        // TODO: laravel built-in validator
        $catatanKebaikan->jenis = $request->jenis;
        $catatanKebaikan->kegiatan = $request->kegiatan;
        $catatanKebaikan->deskripsi = $request->deskripsi;
        $catatanKebaikan->save();

        return redirect()->route('viewCatatanKebaikanSiswa');
    }
}
