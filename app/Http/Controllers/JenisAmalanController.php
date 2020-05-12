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
    
}
