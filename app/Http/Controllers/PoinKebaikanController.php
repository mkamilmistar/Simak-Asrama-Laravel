<?php

namespace App\Http\Controllers;

use App\Http\Resources\PoinSiswaResource;
use App\PoinKebaikan;
use Illuminate\Http\Request;
use App\Siswa;
use PDF;

class PoinKebaikanController extends Controller
{
    /**
     * Daftar Poin Siswa berdarkan NIS
     *
     * @param $nis
     * @return Response
     */
    public function show($nis)
    {
        $siswa = Siswa::where(['NIS' => $nis])->firstOrFail();
        $poinKebaikan = $siswa->poinKebaikan;
        return PoinSiswaResource::collection($poinKebaikan);
    }

    /**
     * Total Poin Siswa berdarkan NIS
     *
     * @param PoinKebaikan $poinKebaikan
     * @return Response
     */
    public function total($nis)
    {
        $siswa = Siswa::where(['NIS' => $nis])->firstOrFail();
        return \response()
            ->json([
                'NIS' => $siswa->NIS,
                'total' => $siswa->jumlah_total_poin,
            ], 200);
    }

    /**
     * main page pembina
     */
    public function viewPoinSearchPage()
    {
        $siswas = Siswa::all();
        return view('poinKebaikan.poinKebaikanSearch', [
            'title' => 'Poin Pelanggaran dan Kebaikan | Sistem Informasi Asrama SCB',
            'siswas' => $siswas
        ]);
    }

    /**
     * view poin per siswa
     */
    public function viewPoinSiswaPage($id)
    {
        $siswa = Siswa::find($id);
        $poin_keburukan = $siswa->poinKebaikan->where('jenis', 'keburukan');
        $poin_kebaikan = $siswa->poinKebaikan->where('jenis', 'kebaikan');
        return view('poinKebaikan.poinKebaikanSiswa', [
            'siswa' => $siswa,
            'poin_keburukan' => $poin_keburukan,
            'poin_kebaikan' => $poin_kebaikan,
            'title' => 'Poin Pelanggaran dan Kebaikan | Sistem Informasi Asrama SCB'
        ]);
    }

    public function viewAddPoinSiswaPage($id)
    {
        $siswa = Siswa::find($id);
        return view('poinKebaikan.tambahPoinKebaikanSiswa', [
            'title' => 'Poin Pelanggaran dan Kebaikan| Sistem Informasi Asrama SCB',
            'siswa' => $siswa
        ]);
    }

    public function addPoinSiswa(Request $request)
    {
        $poinKebaikan = new PoinKebaikan();
        $poinKebaikan->jenis = $request->jenis;
        $poinKebaikan->tanggal = $request->tanggal;
        $poinKebaikan->keterangan = $request->keterangan;
        $poinKebaikan->poin = $request->poin;
        $poinKebaikan->siswa_id = $request->route('id');
        $poinKebaikan->save();
        return redirect()->route('viewPoinSiswaPage', $request->route('id'))->with('success', 'Catatan Ditambah');
    }

    public function removePoinSiswa(Request $request)
    {
        // dd($request->route('id'));
        $poinKebaikan = PoinKebaikan::find($request->route('id'));
        $poinKebaikan->delete();
        return redirect()->route('viewPoinSiswaPage', $request->siswa_id)->with('error', 'Catatan Dihapus');
    }

    public function cetak_pdf($id){
        $siswa = Siswa::find($id);
        $poin_keburukan = $siswa->poinKebaikan->where('jenis', 'keburukan');
        $poin_kebaikan = $siswa->poinKebaikan->where('jenis', 'kebaikan');

        $pdf = PDF::loadview('poinKebaikan.printPDF', [
            'siswa' => $siswa,
            'poin_keburukan' => $poin_keburukan,
            'poin_kebaikan' => $poin_kebaikan
        ]);

        return $pdf->download('PoinPelanggaranKebaikan_'.$siswa->user->nama.$siswa->NIS.'.pdf');
    }
    
    public function viewUpdatePoinSiswaPage(Request $request)
    {
        $poinKebaikan = PoinKebaikan::find($request->route('id'));
        $siswa = $poinKebaikan->siswa;
        //dd($poinKebaikan->keterangan);
        return view('poinKebaikan.updatePoinKebaikanSiswa', [
            'title' => 'Poin Pelanggaran dan Kebaikan | Sistem Informasi Asrama SCB',
            'siswa' => $siswa,
            'poinKebaikan' => $poinKebaikan
        ]);
    }

    public function updatePoinSiswa(Request $request)
    {
        $poinKebaikan = PoinKebaikan::find($request->route('id'));
        $poinKebaikan->jenis = $request->jenis;
        $poinKebaikan->keterangan = $request->keterangan;
        $poinKebaikan->poin = $request->poin;
        $poinKebaikan->tanggal = $request->tanggal;
        $poinKebaikan->save();
        return redirect()->route('viewPoinSiswaPage', $poinKebaikan->siswa_id)->with('success', 'Catatan Terupdate');
    }
}