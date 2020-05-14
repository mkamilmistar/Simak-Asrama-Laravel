<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
        $data_hafalan = Hafalan::where('siswa_id','=',$data_user->siswa->id)->get();
        $data_hafalan2 = HafalanDoaHadist::where('siswa_id','=',$data_user->siswa->id)->get();

        $title='Hafalan | Sistem Informasi Asrama SCB';

        return view('Hafalan.indexHafalanSiswa', compact(['data_user','data_hafalan','data_hafalan2']));
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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