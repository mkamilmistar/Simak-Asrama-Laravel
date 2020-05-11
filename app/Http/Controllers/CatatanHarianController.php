<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Siswa;
use App\Guru;
use Auth;
use App\User;
use App\CatatanHarian;

class CatatanHarianController extends Controller
{
    public function viewPageCatatan(Request $request)
    {
        $catatanHarian = CatatanHarian::all();
        $siswa = Siswa::all();
        $guru = Guru::all();
        $data_siswa = User::where([['role', '=', 'siswa']])->orderBy('nama')->get();
        //$data_siswa = collect([$data_siswa])->sortBy('nama', SORT_REGULAR, false);
        $data_guru = User::where([['role', '=', 'pembina']])->orderBy('nama')->get();
        //dd($catatanHarian);
        return view('catatanHarian.catatanHarian', ['catatanHarian' => $catatanHarian, 'data_siswa' => $data_siswa, 'data_guru' => $data_guru, 'siswa'=>$siswa, 'guru'=>$guru]);
    }

    public function create(Request $request)
    {

        //Insert Table User
        //$user = new User;
        //$user->role = 'siswa';
        //$user->name = $request->nama_depan;
        //$user->email = $request->email;
        //$user->password = bcrypt('rahasia');
        //$user->remember_token = Str::random(60);
        //$user->save();
     
        //$siswa = Siswa::find($request->siswa_id);
        //$guru = Guru::find($request->guru_id);
        //Insert Table Siswa
        //$request->request->add(['siswa_id'=>$siswa->id]);
        //$request->request->add(['guru_id'=>$guru->id]);
        //$catatanHarian = CatatanHarian::create($request->all());

        $catatan = new CatatanHarian();
        $catatan->pembina_id = $request->input('pembina_id');
        $catatan->siswa_id = $request->input('siswa_id');
        $catatan->kategori = $request->input('kategori');
        $catatan->deskripsi = $request->input('deskripsi');
        $catatan->waktu = $request->input('waktu');
        $catatan->save();

        return redirect('/catatan-harian')->with('sukses','Berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $catatanHarian = CatatanHarian::find($id);
        $data_guru = User::where([['role', '=', 'pembina']])->orderBy('nama')->get();
        $data_siswa = User::where([['role', '=', 'siswa']])->orderBy('nama')->get();
        return view('catatanHarian.editCatatanHarian', ['catatanHarian' => $catatanHarian, 'data_siswa' => $data_siswa, 'data_guru' => $data_guru]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $catatanHarian = CatatanHarian::find($id);
        $catatanHarian->update($request->all());
        return redirect('/catatan-harian')->with('sukses', 'Data berhasil diubah!');
    }

    public function delete($id)
    {
        $catatanHarian = CatatanHarian::find($id);
        $catatanHarian->delete($catatanHarian);
        return redirect('/catatan-harian')->with('sukses', 'Data berhasil dihapus!');
    }
}
