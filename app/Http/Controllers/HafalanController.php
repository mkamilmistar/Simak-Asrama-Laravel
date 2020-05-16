<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Siswa;
use App\Hafalan;
use App\HafalanDoaHadist;
use App\Surat;

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
    public function tambahDoa()
    {

        $title= 'Tambah Hafalan Hadits atau Doa | Sistem Informasi Asrama SCB';
        
        return view('Hafalan.tambahHafalanDoa');
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
    public function tambahHafalan()
    {
        $surat_list = DB::table('surat')->get();
        return view ('Hafalan.tambahHafalanQuran')->with('surat_list', $surat_list);
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