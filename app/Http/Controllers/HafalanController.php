<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use PDF;
use App\User;
use App\Siswa;
use App\Hafalan;
use App\HafalanDoaHadist;

class HafalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSiswa()
    {
        $data_user = Auth::user();
        $data_hafalan = Hafalan::where('siswa_id','=',$data_user->siswa->id)->with('surat')->with('guru')->get();
        $data_hafalan2 = HafalanDoaHadist::where('siswa_id','=',$data_user->siswa->id)->with('guru')->get();

        $title= 'Hafalan | Sistem Informasi Asrama SCB';
        return view('Hafalan.indexHafalanSiswa', compact(['title','data_user','data_hafalan','data_hafalan2']));
    }

    public function indexPembina()
    {
        if(Auth::user()->role=='pembina'){
            $data_user = User::where('role','=','siswa')->with('siswa')->get();
            // dd($data_user);
        }else{
            return redirect()->back();
        }

        $title= 'Hafalan | Sistem Informasi Asrama SCB';
        
        return view('Hafalan.indexHafalanPembina', compact(['title','data_user']));
    }

    public function viewHafalanPembina($id)
    {
        if(Auth::user()->role=='pembina'){
            $data_user = User::where('id',$id)->get()->first();
            $data_hafalan = Hafalan::where('siswa_id','=',$data_user->siswa->id)->with('surat')->with('guru')->get();
            $data_hafalan2 = HafalanDoaHadist::where('siswa_id','=',$data_user->siswa->id)->with('guru')->get();
            // dd($data_user);
        }else{
            return redirect()->back();
        }

        $title= 'Hafalan | Sistem Informasi Asrama SCB';
        
        return view('Hafalan.viewHafalanPembina', compact(['title','data_user','data_hafalan','data_hafalan2']));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahDoa($id)
    {
        if(Auth::user()->role=='pembina'){
            $data_user = User::where('id',$id)->get()->first();
            // dd($data_user);
        }else{
            return redirect()->back();
        }
        
        $title= 'Tambah Hafalan Hadits atau Doa | Sistem Informasi Asrama SCB';
        return view('Hafalan.tambahHafalanDoa', compact(['title','data_user']));
    }

    public function postDoa($id, Request $request)
    {
        if(Auth::user()->role=='pembina'){
            $data_user = User::where('id',$id)->get()->first();
            // dd($data_user);
        }else{
            return redirect()->back();
        }

        $this->validate($request, [
            'nilai' => 'required',
            'jenis' => 'required',
            'hafalan' => 'required',
            'PM' =>'required'
        ]);

        $hafalan = new HafalanDoaHadist();
        $hafalan->pembina_id = Auth::user()->id;
        $hafalan->siswa_id = $data_user->siswa->id;
        $hafalan->nilai = $request->input('nilai');
        if($request->input('jenis')=='Doa'){
            $hafalan->doa = $request->input('hafalan');
        }else{
            $hafalan->hadist = $request->input('hafalan');
        }
        $hafalan->pm = $request->input('PM');
        $hafalan->tanggal = now();
        $hafalan->save();
            
        $title= 'Tambah Hafalan Doa/Hadist | Sistem Informasi Asrama SCB';
        return redirect()->route('viewHafalanPembina',$data_user->id)->with('sukses', 'Hafalan Doa/Hadist Berhasil Ditambahkan!');
    }

    public function hapusDoa($userId, $id)
    {
        if(Auth::user()->role=='pembina'){
            $data_user = User::where('id',$userId)->get()->first();
            // dd($data_user);
        }else{
            return redirect()->back();
        }
        $catatan = HafalanDoaHadist::find($id);
        $catatan->delete();
            
        $title= 'Tambah Hafalan Quran | Sistem Informasi Asrama SCB';
        return redirect()->route('viewHafalanPembina',$data_user->id)->with('danger', 'Hafalan Doa/Hadist Berhasil Dihapus!');
    }

    // {
    //     return view('Hafalan.tambahHafalanDoa');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambahHafalan($id)
    {
        if(Auth::user()->role=='pembina'){
            $data_user = User::where('id',$id)->get()->first();
            // dd($data_user);
        }else{
            return redirect()->back();
        }

        $title= 'Tambah Hafalan Quran | Sistem Informasi Asrama SCB';
        $surat_list = DB::table('surat')->get();
        return view ('Hafalan.tambahHafalanQuran', compact(['title','data_user']))->with('surat_list', $surat_list);
    }

    public function postHafalan($id, Request $request)
    {
        if(Auth::user()->role=='pembina'){
            $data_user = User::where('id',$id)->get()->first();
            // dd($data_user);
        }else{
            return redirect()->back();
        }

        $this->validate($request, [
            'nilai' => 'required',
            'ayat1' => 'required',
            'ayat0' => 'required',
            'surat' => 'required',
            'TM' =>'required',
            'PM' =>'required'
        ]);

        $hafalan = new Hafalan();
        $hafalan->pembina_id = Auth::user()->id;
        $hafalan->siswa_id = $data_user->siswa->id;
        $hafalan->nilai = $request->input('nilai');
        $hafalan->ayat1 = $request->input('ayat1');
        $hafalan->ayat0 = $request->input('ayat0');
        $hafalan->surat_id = $request->input('surat');
        $hafalan->tm = $request->input('TM');
        $hafalan->pm = $request->input('PM');
        $hafalan->tanggal = now();
        $hafalan->save();
            
        $title= 'Tambah Hafalan Quran | Sistem Informasi Asrama SCB';
        return redirect()->route('viewHafalanPembina',$data_user->id)->with('sukses', 'Hafalan Quran Berhasil Ditambahkan!');
    }

    public function hapusHafalan($userId, $id)
    {
        if(Auth::user()->role=='pembina'){
            $data_user = User::where('id',$userId)->get()->first();
            // dd($data_user);
        }else{
            return redirect()->back();
        }
        $catatan = Hafalan::find($id);
        $catatan->delete();
            
        $title= 'Tambah Hafalan Quran | Sistem Informasi Asrama SCB';
        return redirect()->route('viewHafalanPembina',$data_user->id)->with('danger', 'Hafalan Quran Berhasil Dihapus!');
    }

    public function cetak_pdf($id)
    {
        $data_user = User::where('id',$id)->get()->first();
        // dd($data_user);
            
        $data_hafalan = Hafalan::where('siswa_id','=',$data_user->siswa->id)->with('surat')->with('guru')->get();
        $data_hafalan2 = HafalanDoaHadist::where('siswa_id','=',$data_user->siswa->id)->with('guru')->get();


        $pdf = PDF::loadview('Hafalan.printPDF', [
            'data_hafalan' => $data_hafalan,
            'data_hafalan2' => $data_hafalan2,
            'data_user' => $data_user
        ]);
        return $pdf->download('dataHafalan-'.$data_user->nama.'.pdf');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}