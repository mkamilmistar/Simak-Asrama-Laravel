<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatatanKebaikan;
use Auth;
use App\User;

class CatatanKebaikanController extends Controller
{
    //SISWA
    public function viewPageCatatanKebaikanSiswa()
    {
        $userId = Auth::user()->id;
    
        $user = Auth::user();

        $catatanKebaikan = CatatanKebaikan::where([
            ['user_id',$userId],
            ['jenis', '=', 'Baik']
            ])->get();
        $catatanKeburukan = CatatanKebaikan::where([
            ['user_id',$userId],
            ['jenis', '=', 'Buruk']
            ])->get();
        
        
        $catatanPembina = CatatanKebaikan::all();

        return view('catatanKebaikan.catatanKebaikanSiswa', compact(['catatanKebaikan', 'catatanKeburukan', 'user', 'catatanPembina']));
    }

    public function viewPageTambahCatatanKebaikanSiswa()
    {
        return view('catatanKebaikan.tambahCatatanKebaikanSiswa');
    }

    public function postCatatanKebaikanSiswa(Request $request)
    {
        $this->validate($request, [
            'jenis' => 'max:25',
            'kegiatan' => 'max:40',
            'keterangan' => 'max:100',
        ]);
        $catatan = new CatatanKebaikan();
        $catatan->user_id = Auth::user()->id;
        $catatan->jenis = $request->input('jenis');
        $catatan->kegiatan = $request->input('kegiatan');
        $catatan->keterangan = $request->input('keterangan');
        $catatan->save();
        return redirect('/catatan-kebaikan')->with('sukses', 'Catatan Kebaikan Berhasil ditambahkan!');
    }

    public function viewUpdateCatatan($id)
    {
       $catatan = CatatanKebaikan::find($id);
       return view('catatanKebaikan.editCatatanKebaikanSiswa', compact('catatan'));
    }

    public function updateCatatan(Request $request, $id)
    {
        $catatan = CatatanKebaikan::find($id);
        $catatan->update([
            'jenis'     => request('jenis'),
            'kegiatan'     => request('kegiatan'),
            'keterangan'     => request('keterangan'),
        ]);
        return redirect('/catatan-kebaikan')->with('sukses', 'Catatan Kebaikan Berhasil diupdate!');
    }

    public function hapusCatatan($id)
    {
        $catatan = CatatanKebaikan::find($id);
        $catatan->delete();
        return redirect('/catatan-kebaikan')->with('sukses', 'Data Berhasil Dihapus!');
    }
}
