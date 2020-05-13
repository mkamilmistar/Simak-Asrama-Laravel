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
        //
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
        return view('poinKebaikan.poinKebaikanSearch', [ 'siswas' => $siswas ]);
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
            'poin_kebaikan' => $poin_kebaikan
        ]);
    }
}
