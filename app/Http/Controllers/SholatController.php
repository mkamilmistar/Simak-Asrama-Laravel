<?php

namespace App\Http\Controllers;

use App\Http\Resources\CatatanSholatResource;
use App\Sholat;
use Illuminate\Http\Request;
use App\Siswa;
use PDF;

class SholatController extends Controller
{
    public function store(Request $request)
    {
        $param = $request->json()->all();
        $siswa = Siswa::where(['NIS' => $param['NIS']])->firstOrFail();
        $catatanSholat = new Sholat();
        $catatanSholat->siswa_id = $siswa->id;
        $catatanSholat->jenis_sholat = $param['jenis_sholat'];
        $catatanSholat->waktu_masuk2 = $param['waktu_masuk'];
        $catatanSholat->waktu_adzan2 = $param['waktu_adzan'];
        $catatanSholat->tanggal = $param['tanggal'];
        $catatanSholat->save();
        return response()->json($catatanSholat, 200);
    }

    public function all()
    {
        $catatanSholat = Sholat::all()->groupBy('siswa_id');
        $final = [];
        foreach ($catatanSholat as $key => $catatanSholatSiswa) {
            // TODO: this is too pricey
            $siswa = Siswa::findOrFail($key);
            $final[] = [
                'name' => $siswa->user->nama,
                'NIS' => $siswa->NIS,
                'data' => CatatanSholatResource::collection($catatanSholatSiswa)
            ];
        }

        return response()->json($final, 200);
    }

    /**
     * Daftar Catatan Sholat Siswa berdarkan NIS
     *
     * @param $nis
     * @return Response
     */
    public function show($nis)
    {
        $siswa = Siswa::where(['NIS' => $nis])->firstOrFail();
        $catatanSholat = $siswa->catatanSholat;
        return CatatanSholatResource::collection($catatanSholat);
    }

    /**
     * main page pembina
     */
    public function viewSholatSearchPage()
    {
        $siswas = Siswa::all();
        return view('catatanSholat.catatanSholatSearch', [
            'title' => 'Catatan Sholat | Sistem Informasi Asrama SCB',
            'siswas' => $siswas
        ]);
    }

    /**
     * view poin per siswa
     */
    public function viewSholatSiswaPage($id)
    {
        $siswa = Siswa::find($id);
        $sholat = Sholat::where('siswa_id',$id)->get();
        
        return view('catatanSholat.catatanSholatSiswa', [
            'siswa' => $siswa,
            'sholats' => $sholat,    
        ]);
    }

    public function viewAddSholatSiswaPage($id)
    {
        $siswa = Siswa::find($id);
        return view('catatanSholat.tambahCatatanSholatSiswa', [
            'title' => 'Catatan Sholat Siswa | Sistem Informasi Asrama SCB',
            'siswa' => $siswa
        ]);
    }

    public function addSholatSiswa(Request $request)
    {
        $sholatSiswa = new Sholat();
        $sholatSiswa->siswa_id = $request->route('id');
        $sholatSiswa->tanggal = $request->tanggal;
        $sholatSiswa->jenis_sholat = $request->jenis_sholat;
        // $sholatSiswa->waktu_masuk = $request->waktu_masuk;
        // $sholatSiswa->waktu_adzan = $request->waktu_adzan;
        $sholatSiswa->waktu_masuk2 = $request->waktu_masuk2;
        $sholatSiswa->waktu_adzan2 = $request->waktu_adzan2;
        
        $sholatSiswa->save();
        return redirect()->route('viewSholatSiswaPage', $request->route('id'));
    }

    public function removeSholatSiswa(Request $request)
    {
        $sholatSiswa = Sholat::find($request->route('id'));
        $sholatSiswa->delete();
        return redirect()->route('viewSholatSiswaPage', $request->siswa_id);
    }

    public function cetak_pdf($id){
        $siswa = Siswa::find($id);
        $sholat = Sholat::where('siswa_id',$id)->get();

        $pdf = PDF::loadview('catatanSholat.printPDF', [
            'siswa' => $siswa,
            'sholats' => $sholat,
        ]);

        return $pdf->download('sholatSiswa-pdf.pdf');
    }
    
    public function viewUpdateSholatSiswaPage(Request $request)
    {
        $sholatSiswa = Sholat::find($request->route('id'));
        $siswa = $sholatSiswa->siswa;
        return view('catatanSholat.updateCatatanSholatSiswa', [
            'title' => 'Catatan Sholat | Sistem Informasi Asrama SCB',
            'siswa' => $siswa,
            'poinKebaikan' => $sholatSiswa
        ]);
    }

    public function updateSholatSiswa(Request $request)
    {
        $sholatSiswa = Sholat::find($request->route('id'));
        $sholatSiswa->siswa_id = $request->route('id');
        $sholatSiswa->tanggal = $request->tanggal;
        $sholatSiswa->waktu_masuk2 = $request->waktu_masuk2;
        $sholatSiswa->waktu_adzan2 = $request->waktu_adzan2;
 
        $sholatSiswa->save();
        return redirect()->route('viewSholatSiswaPage', $sholatSiswa->siswa_id);
    }
}