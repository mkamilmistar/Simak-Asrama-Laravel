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
    
    public function viewEditJenisAmalan($id)
    {
        $jenisAmalan = JenisAmalanYaumiyah::find($id);
        // dd($jenisAmalan);
        return view('catatanAmalanYaumiyah.editJenisAmalan', compact(['jenisAmalan']));
    }

    public function updateJenisAmalan(Request $request, $id)
    {
        $this->validate($request, [
            'jenisAmalan' => 'required|max:25',
            'keterangan' => 'required|max:50',
            'bobotAmalan' => 'required|max:10',
        ]);
        
        $jenisAmalan = JenisAmalanYaumiyah::find($id);
        $jenisAmalan->update([
            'jenisAmalan'      => request('jenisAmalan'),
            'keterangan'      => request('keterangan'),
            'bobotAmalan'     => request('bobotAmalan'),
        ]);
        
        return redirect('/jenis-amalan')->with('sukses', 'Jenis Amalan Berhasil diupdate!');
    }

    public function deleteJenisAmalan($id)
    {
        $jenisAmalan = JenisAmalanYaumiyah::find($id);
        $jenisAmalan->delete();
        return redirect('/jenis-amalan')->with('sukses', 'Jenis Amalan Berhasil dihapus!');
    }

    public function createJenisAmalan()
    {
        return view('catatanAmalanYaumiyah.tambahJenisAmalan');
    }

    public function postJenisAmalan(Request $request)
    {
        $this->validate($request, [
            'jenisAmalan' => 'required|max:25',
            'keterangan' => 'required|max:50',
            'bobotAmalan' => 'required|max:10',
        ]);
        $jenisAmalan = new JenisAmalanYaumiyah();
        $jenisAmalan->jenisAmalan = $request->input('jenisAmalan');
        $jenisAmalan->keterangan = $request->input('keterangan');
        $jenisAmalan->bobotAmalan = $request->input('bobotAmalan');
        $jenisAmalan->save();

        return redirect('/jenis-amalan')->with('sukses', 'Jenis Amalan Berhasil ditambahkan!');
    }

    
}
