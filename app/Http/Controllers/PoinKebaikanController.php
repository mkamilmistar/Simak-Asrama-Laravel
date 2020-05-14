<?php

namespace App\Http\Controllers;

use App\PoinKebaikan;
use Illuminate\Http\Request;
use App\Siswa;

class PoinKebaikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poinKebaikan = new PoinKebaikan();
        $poinKebaikan->jenis = $request->jenis;
        $poinKebaikan->tanggal = $request->tanggal;
        $poinKebaikan->keterangan = $request->keterangan;
        $poinKebaikan->poin = $request->poin;
        $poinKebaikan->siswa_id = $request->id;
        $poinKebaikan->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PoinKebaikan  $poinKebaikan
     * @return \Illuminate\Http\Response
     */
    public function show(PoinKebaikan $poinKebaikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PoinKebaikan  $poinKebaikan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoinKebaikan $poinKebaikan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PoinKebaikan  $poinKebaikan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoinKebaikan $poinKebaikan)
    {
        //
    }

    /**
     * main page pembina
     */
    public function viewPoinSearchPage()
    {
        $siswas = Siswa::all();
        return view('poinKebaikan.poinKebaikanSearch', ['title' => 'Poin Pelanggaran dan Kebaikan | Sistem Informasi Asrama SCB', 'siswas' => $siswas ]);
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
        return view('poinKebaikan.tambahPoinKebaikanSiswa', [ 'title' => 'Poin Pelanggaran dan Kebaikan| Sistem Informasi Asrama SCB','siswa' => $siswa ]);
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
        return redirect()->route('viewPoinSiswaPage', $request->route('id'));
    }
    
    public function removePoinSiswa(Request $request)
    {
        $poinKebaikan = PoinKebaikan::find($request->route('id'));
        $poinKebaikan->delete();
        return redirect()->route('viewPoinSiswaPage', $request->siswa_id);
    }
}