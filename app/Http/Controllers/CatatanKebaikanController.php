<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CatatanKebaikan;
use Auth;
use App\User;
use App\Siswa;

class CatatanKebaikanController extends Controller
{
    
    public function viewPageCatatanKebaikanSiswa($id)
    {
        if(Auth::id() == $id){
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

            $siswa = Siswa::where('user_id', $userId)->get()->first();
            
            // dd($catatanKebaikan);
            //dd($data_siswa);
        }
        else{
           //back 
            return redirect()->back();
        }
        $title='Catatan Kebaikan | Sistem Informasi Asrama SCB';

        return view('catatanKebaikan.catatanKebaikanSiswa', compact(['title' ,'catatanKebaikan', 'catatanKeburukan', 'user', 'siswa']));
    }

    public function viewPageTambahCatatanKebaikanSiswa($userId)
    {
        $user = User::find($userId);
        $title = 'Catatan Kebaikan | Sistem Informasi Asrama SCB';
        return view('catatanKebaikan.tambahCatatanKebaikanSiswa', compact(['title']));
    }

    public function postCatatanKebaikanSiswa($id, Request $request)
    {
        $this->validate($request, [
            'jenis' => 'required|max:25',
            'kegiatan' => 'required|max:40',
            'keterangan' => 'required|max:100',
            'tanggal' => 'required'
        ]);
        $catatan = new CatatanKebaikan();
        $catatan->user_id = Auth::user()->id;
        $catatan->jenis = $request->input('jenis');
        $catatan->kegiatan = $request->input('kegiatan');
        $catatan->keterangan = $request->input('keterangan');
        $catatan->tanggal = $request->input('tanggal');
        $catatan->save();
        
        $user = User::find($id);
            
        return redirect()->route('viewCatatanKebaikanSiswa', [Auth::user()->id])->with('sukses', 'Catatan Kebaikan Berhasil ditambahkan!');
    }

    public function viewUpdateCatatan($userId, $id)
    {
       $user = User::find($userId);
       $catatan = CatatanKebaikan::find($id);

       $title='Update Catatan Kebaikan | Sistem Informasi Asrama SCB';
       return view('catatanKebaikan.editCatatanKebaikanSiswa', compact(['title','catatan']));
    }

    public function updateCatatan(Request $request, $userId, $id)
    {
        $this->validate($request, [
            'jenis' => 'required|max:25',
            'kegiatan' => 'required|max:40',
            'keterangan' => 'required|max:100',
            'tanggal' => 'required'
        ]);
        
        $user = User::find($userId);
        $catatan = CatatanKebaikan::find($id);
        $catatan->update([
            'jenis'      => request('jenis'),
            'kegiatan'     => request('kegiatan'),
            'keterangan'     => request('keterangan'),
            'tanggal'       => request('tanggal'),
        ]);
        if(Auth::user()->role=='siswa'){
            return redirect()->route('viewCatatanKebaikanSiswa', [Auth::user()->id])->with('sukses', 'Catatan Kebaikan Berhasil diupdate!');
        }else{
            return redirect()->route('viewCatatanKebaikan')->with('primary', 'Catatan Kebaikan Berhasil diupdate!');
        }
    }

    public function hapusCatatan($userId, $id)
    {
        $user = User::find($userId);
        $catatan = CatatanKebaikan::find($id);
        $catatan->delete();
        if(Auth::user()->role=='siswa'){
            return redirect()->route('viewCatatanKebaikanSiswa', [Auth::user()->id])->with('sukses', 'Data Berhasil Dihapus!');
        }else{
            return redirect()->route('viewCatatanKebaikan')->with('danger', 'Catatan Kebaikan Berhasil Dihapus!');
        }
    }


    //PEMBINA Version
    public function viewPageCatatanKebaikanPembina($id){
        $siswa = Siswa::where('user_id', $id)->get()->first();
        // dd($siswa);

        $data_user = User::find($id);
        if($data_user->role==="siswa"){
            $catatanKebaikan = CatatanKebaikan::where([
                ['jenis', 'Baik'],
                ['user_id', $id]
            ])->get();
            $catatanKeburukan = CatatanKebaikan::where([
                ['jenis', 'Buruk'],
                ['user_id', $id]
            ])->get();

            
        }else{
            return redirect()->route('viewCatatanAmalan');
        }
        // $userId = User::find($id);
        
     
        // dd($catatanKebaikan);
        $title=  'Catatan Kebaikan | Sistem Informasi Asrama SCB';

    return view('catatanKebaikan.catatanKebaikanPembina', compact(['title','data_user','siswa','catatanKebaikan', 'catatanKeburukan']));
    
    }   

    public function viewPageCatatanKebaikan(){
        $userId = Auth::user()->id;
        $catatanKebaikan = CatatanKebaikan::where([
            ['user_id', Auth::user()->id],
            ['jenis', 'Baik'],
        ])->get();
        
        $catatanKeburukan = CatatanKebaikan::where([
            ['user_id', $userId],
            ['jenis', 'Buruk'],
        ])->get();

        if(Auth::user()->role=='pembina'){
            $data_user = User::where('role', 'siswa')->get();
        }else{
            $data_user = Auth::user();
            return redirect()->back();
        }
        $title = 'Catatan Kebaikan | Sistem Informasi Asrama SCB';
        
        return view('catatanKebaikan.catatanKebaikan', compact(['title','data_user','catatanKebaikan','catatanKeburukan']));
    }

}