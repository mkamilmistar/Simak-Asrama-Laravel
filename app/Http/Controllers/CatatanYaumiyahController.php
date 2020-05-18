<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Siswa;
use App\CatatanAmaliyah;
use App\JenisAmalanYaumiyah;
use Carbon\Carbon;

class CatatanYaumiyahController extends Controller
{
    public function viewPagePembina()
    {
        if(Auth::user()->role=='pembina'){
            $data_user = User::where('role','=','siswa')->with('siswa')->get();
            // dd($data_user);
        }else{
            return redirect()->back();
        }
        $title= 'Catatan Amaliyah | Sistem Informasi Asrama SCB';
        
        return view('catatanAmalanYaumiyah.catatanAmalanPembina', compact(['title','data_user']));
    }
 
    public function viewPageSiswa(Request $request)
    {
        $data_user = Auth::user();

        $catatanAmaliyah = CatatanAmaliyah::where('user_id', Auth::user()->id)->with('jenisAmalanYaumiyah')->get();
        // dd($catatanAmaliyah);

        $title= 'Catatan Amaliyah | Sistem Informasi Asrama SCB';

        return view('catatanAmalanYaumiyah.catatanAmalanSiswa', compact(['title','catatanAmaliyah','data_user']));
    }

    public function viewTambahCatatan()
    {
        $jenisCatatan = JenisAmalanYaumiyah::all();;

        $title = 'Tambah Catatan Amaliyah | Sistem Informasi Asrama SCB'; 
        return view('catatanAmalanYaumiyah.tambahCatatanAmalanSiswa', compact(['jenisCatatan', 'title']));
    }

    public function postCatatan(Request $request)
    {
        $user_id = User::find(Auth::user()->id);
        $data = $request->all();
        $finalArray = array();
        foreach($data as $key=>$value){
           array_push($finalArray, array(
                        'jenisAmalan_id'=>$value['jenisAmalan_id'],
                        'keterangan'=>$value['keterangan'],
                        'jumlah'=>$value['jumlah'],
                        'user_id'=>$value[$user_id],)
           );
        };
        
        CatatanAmaliyah::insert($finalArray);


        // $jenisAmalan -> update($request->all());

        $catatans = new CatatanAmaliyah;
        foreach($catatans as $catatan){
            $catatan->jenisAmalan_id = $request->input('jenisAmalan_id');
            $catatan->user_id = Auth::user()->id;
            $catatan->keterangan = $request->input('keterangan');
            $catatan->jumlah = $request->input('jumlah');
        };
        $catatans->save(); 
        
        // $catatan = CatatanAmaliyah::find($id);
        // $jenisAmalan->update([
        //     'jenisAmalan'      => request('jenisAmalan'),
        //     'keterangan'        => request('keterangan'),
        //     'jumlah'           => request('jumlah'),
        // ]);
        
        dd($request->all());
        return redirect()->route('viewPageSiswa');

    }

}