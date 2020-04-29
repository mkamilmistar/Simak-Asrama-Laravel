<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatatanHarianController extends Controller
{
    public function viewPageCatatan(Request $request)
    {
        if($request->has('cari')){
            $catHarian = \App\CatatanHarian::where('waktu', 'LIKE', '%'.$request->cari.'%')->get();
        }
        else{
            $catHarian = \App\CatatanHarian::all();
            //$tanggal = strtotime($catHarian->waktu);
            //$tanggal = date('d M Y', $tanggal);
            //$jam = date('g:ha', $tanggal);
            //$catHarian->request->add(['tanggal'=>$tanggal]);
            //$catHarian->request->add(['tanggal'=>$jam]);
        }
        return view('catatanHarian', ['catHarian' => $catHarian]);
    }

    public function viewPageTambahCatatan()
    {
        return view('tambahCatatanHarian');
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
     
        //Insert Table Siswa
        //$request->request->add(['user_id'=>$user->id]);
        $catHarian = \App\CatatanHarian::create($request->all());
        return redirect('/catatan-harian')->with('sukses','Berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $catHarian = \App\CatatanHarian::find($id);
        return view('editCatatanHarian', ['catHarian' => $catHarian]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $catHarian = \App\CatatanHarian::find($id);
        $catHarian->update($request->all());
        return redirect('/catatan-harian')->with('sukses', 'Data berhasil diubah!');
    }

    public function delete($id)
    {
        $catHarian = \App\CatatanHarian::find($id);
        $catHarian->delete($catHarian);
        return redirect('/catatan-harian')->with('sukses', 'Data berhasil dihapus!');
    }
}
