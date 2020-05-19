<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Siswa;
use App\Guru;
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
        return view('catatanHarian.catatanHarian', ['title' => 'Catatan Harian Siswa | Sistem Informasi Asrama', 'catatanHarian' => $catatanHarian, 'data_siswa' => $data_siswa, 'data_guru' => $data_guru, 'siswa'=>$siswa, 'guru'=>$guru]);
    }

    public function viewPageCatatanSiswa(Request $request, $id)
    {
        $catatanHarian = CatatanHarian::where('siswa_id', $id)->get();
        //$catatanHarian = $catatanHarian->where(['siswa_id', $id])->first();
        $data_siswa = User::find($id);
        $siswa = Siswa::where('user_id', $id)->first();
        $guru = Guru::all();
        $data_guru = User::where([['role', '=', 'pembina']])->orderBy('nama')->get();
        //dd($siswa);
        return view('catatanHarian.catatanHarianSiswa', ['title' => 'Catatan Harian Siswa | Sistem Informasi Asrama', 'catatanHarian' => $catatanHarian, 'data_siswa' => $data_siswa, 'siswa' => $siswa, 'data_guru' => $data_guru, 'guru'=>$guru]);
    }

    public function create(Request $request)
    {

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
        return view('catatanHarian.editCatatanHarian', ['title' => 'Edit Catatan Harian | Sistem Informasi Asrama', 'catatanHarian' => $catatanHarian, 'data_siswa' => $data_siswa, 'data_guru' => $data_guru]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $catatanHarian = CatatanHarian::find($id);
        $catatanHarian->update($request->all());
        return redirect('/catatan-harian')->with('primary', 'Data berhasil diubah!');
    }

    public function delete($id)
    {
        $catatanHarian = CatatanHarian::find($id);
        $catatanHarian->delete($catatanHarian);
        return redirect('/catatan-harian')->with('danger', 'Data berhasil dihapus!');
    }

    public function generate()
    {
        $catatanHarian = CatatanHarian::get();
        $siswa = Siswa::all();
        $guru = Guru::all();
        $data_siswa = User::where([['role', '=', 'siswa']])->orderBy('nama')->get();
        $data_guru = User::where([['role', '=', 'pembina']])->orderBy('nama')->get();
        $fileName = "Catatan_Harian.pdf";
        $mpdf = new \Mpdf\Mpdf([
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 15,
            'margin_bottom' => 20,
            'margin_header' => 10,
            'margin_footer' => 10
        ]);
        $html = \View::make('catatanHarian.viewPDF')->with('catatanHarian', $catatanHarian);
        $html = $html->render();

        $mpdf->SetHeader('Chapter1|Catatan Harian|{PAGENO}');
        $mpdf->SetFooter('This is Footer');
        //$stylesheet = file_get_contents(url("/css/mpdf.css"));
        //$mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($html);
        $mpdf->Output($fileName, 'I');
    }

}