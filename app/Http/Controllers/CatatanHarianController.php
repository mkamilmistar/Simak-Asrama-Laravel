<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Siswa;
use App\Guru;

class CatatanHarianController extends Controller
{
    public function viewPageCatatan(Request $request)
    {
        $catatanHarian = \App\CatatanHarian::all();
        $siswa = Siswa::all();
        $siswa = $siswa->sortBy('nama', SORT_REGULAR, false);
        $guru = Guru::all();
        $guru = $guru->sortBy('nama', SORT_REGULAR, false);
        return view('catatanHarian', ['catatanHarian' => $catatanHarian, 'siswa' => $siswa, 'guru' => $guru]);
    }

    public function create(Request $request)
    {

        //Insert Table User
        //$user = new \App\User;
        //$user->role = 'siswa';
        //$user->name = $request->nama_depan;
        //$user->email = $request->email;
        //$user->password = bcrypt('rahasia');
        //$user->remember_token = Str::random(60);
        //$user->save();
     
        $siswa = Siswa::find($request->siswa_id);
        $guru = Guru::find($request->guru_id);
        //Insert Table Siswa
        $request->request->add(['siswa_id'=>$siswa->id]);
        $request->request->add(['guru_id'=>$guru->id]);
        $catatanHarian = \App\CatatanHarian::create($request->all());

        return redirect('/catatan-harian')->with('sukses','Berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $catatanHarian = \App\CatatanHarian::find($id);
        return view('editCatatanHarian', ['catatanHarian' => $catatanHarian]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $catatanHarian = \App\CatatanHarian::find($id);
        $catatanHarian->update($request->all());
        return redirect('/catatan-harian')->with('sukses', 'Data berhasil diubah!');
    }

    public function delete($id)
    {
        $catatanHarian = \App\CatatanHarian::find($id);
        $catatanHarian->delete($catatanHarian);
        return redirect('/catatan-harian')->with('sukses', 'Data berhasil dihapus!');
    }
}
