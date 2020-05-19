<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Siswa;
use App\CatatanAmaliyah;
use App\JenisAmalanYaumiyah;
use Carbon\Carbon;
use DB;

class CatatanYaumiyahController extends Controller
{
    public function viewPageCatatan()
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

    public function viewPageCatatanSiswa($id)
    {
        $title= 'Catatan Amaliyah | Sistem Informasi Asrama SCB';

        $data_user = User::find($id);
        $siswa = Siswa::where('user_id', $id)->get()->first();
        // dd($siswa);
        // dd($data_user);
        
        if($data_user->role==="siswa"){
            $catatanAmaliyah = CatatanAmaliyah::where('user_id', $id)->with('jenisAmalanYaumiyah')->get();
            // dd($catatanAmaliyah);
        }else{
            return redirect()->route('viewCatatanKebaikan');
        }

        // dd($siswa);
        return view('catatanAmalanYaumiyah.catatanAmalanPembinaAll', compact(['title','data_user', 'siswa', 'catatanAmaliyah']));

    }
 
    public function viewPageSiswa(Request $request, $id)
    {
        $title= 'Catatan Amaliyah | Sistem Informasi Asrama SCB';
        
        if(Auth::id() == $id){
            $userId = Auth::user()->id;  
    
            $data_user = Auth::user();
            
            $catatanAmaliyah = CatatanAmaliyah::where('user_id', Auth::user()->id)->with('jenisAmalanYaumiyah')->get();
            $jenisCatatan = JenisAmalanYaumiyah::all();
    
            return view('catatanAmalanYaumiyah.catatanAmalanSiswa', compact(['title','catatanAmaliyah','data_user']));
        }else{
            return redirect()->back();
        }

        return view('catatanAmalanYaumiyah.catatanAmalanSiswa', compact(['title','catatanAmaliyah','data_user']));
    }

    public function viewTambahCatatan($id)
    {
        $jenisCatatan = JenisAmalanYaumiyah::all();;
        $user = User::find($id);
        $title = 'Tambah Catatan Amaliyah | Sistem Informasi Asrama SCB'; 
        return view('catatanAmalanYaumiyah.tambahCatatanAmalanSiswa', compact(['jenisCatatan', 'title', 'user']));
    }

    public function postCatatan($id, Request $request)
    {
        
        $user_id = Auth::user()->id;

        $catatan = CatatanAmaliyah::where('user_id','=', $user_id)->get();
        // dd($catatan);

        $count = (sizeof($request->all())-1)/3;
        // dd($count);
        for($index=0; $index<$count; $index++){
            if(!$catatan->isEmpty()){
                $jumlah_sebelum = $catatan[$index]->jumlah;
            }else{
                $jumlah_sebelum = 0;
            }
                $counter = $index + 1;
                CatatanAmaliyah::updateOrCreate(
                    [
                        'jenisAmalan_id' =>  $counter, 
                        'user_id' => $user_id
                    ],
                    [
                        'keterangan' => $request->input('keterangan_'. $index), 
                        'jumlah' => ($request->input('jumlah_'. $index)+$jumlah_sebelum), 
                        ]);   
                    };
                
            $catatanAmaliyah = CatatanAmaliyah::where('user_id', Auth::user()->id)->with('jenisAmalanYaumiyah')->get();
            $jenisCatatan = JenisAmalanYaumiyah::all();
    
            $count = (sizeof($jenisCatatan));
    
            $totalPoin[] = NULL;
    
            if($catatanAmaliyah->isEmpty()){
                $isiTotal = 0;
    
                return view('catatanAmalanYaumiyah.catatanAmalanSiswa', compact(['title','catatanAmaliyah','data_user', 'isiTotal']));
            }else{
    
                for($index=0; $index<$count; $index++){
                    $bobot = $jenisCatatan[$index]->bobotAmalan;
                    $jumlahCatatan = $catatanAmaliyah[$index]->jumlah;
                    $pushPoin = $bobot * $jumlahCatatan;
                    array_push($totalPoin, $pushPoin);
                }
    
                $isiTotal=0;
                for($i=1; $i<=$count; $i++){
                    $isiTotal += $totalPoin[$i];
                }; 
                
            //input to database
            DB::table('siswa')->where('user_id', Auth::user()->id)
            ->update(['poinAmaliyah' => $isiTotal]);
            
    return redirect()->route('viewPageSiswa', $user_id);

    }
    }
    

}