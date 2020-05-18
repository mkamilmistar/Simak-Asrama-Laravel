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
    public function getPoin()
    {
        $data_user = User::where('role','=','siswa')->with('siswa')->get();
        $catatanAmaliyah = CatatanAmaliyah::where('user_id', '=', $data_user)->get();
        dd($data_user);
        $jenisCatatan = JenisAmalanYaumiyah::all();
        
        // $count = (sizeof($jenisCatatan));

        // $totalPoin[] = NULL;

        // for($index=0; $index<$count; $index++){
        //     $bobot = $jenisCatatan[$index]->bobotAmalan;
        //     $jumlahCatatan = $catatanAmaliyah[$index]->jumlah;
        //     $pushPoin = $bobot * $jumlahCatatan;
        //     array_push($totalPoin, $pushPoin);
        // }

        // $isiTotal=0;

        // for($i=1; $i<$count; $i++){
        //     $isiTotal += $totalPoin[$i];
        // };

        // return $isiTotal;
        
    }

    public function viewPagePembina()
    {
        if(Auth::user()->role=='pembina'){
            $data_user = User::where('role','=','siswa')->with('siswa')->get();
            // dd($data_user);
        }else{
            return redirect()->back();
        }
        
        $poin = $this->getPoin();
        // dd($poin);

        $title= 'Catatan Amaliyah | Sistem Informasi Asrama SCB';
        
        return view('catatanAmalanYaumiyah.catatanAmalanPembina', compact(['title','data_user']));
    }
 
    public function viewPageSiswa(Request $request)
    {
        $data_user = Auth::user();

        $catatanAmaliyah = CatatanAmaliyah::where('user_id', Auth::user()->id)->with('jenisAmalanYaumiyah')->get();
        $jenisCatatan = JenisAmalanYaumiyah::all();
        $count = (sizeof($jenisCatatan));

        $totalPoin[] = NULL;

        for($index=0; $index<$count; $index++){
            $bobot = $jenisCatatan[$index]->bobotAmalan;
            $jumlahCatatan = $catatanAmaliyah[$index]->jumlah;
            $pushPoin = $bobot * $jumlahCatatan;
            array_push($totalPoin, $pushPoin);
        }
        $isiTotal=0;
        for($i=1; $i<$count; $i++){
            $isiTotal += $totalPoin[$i];
        };

        ($isiTotal);
        
        $title= 'Catatan Amaliyah | Sistem Informasi Asrama SCB';

        return view('catatanAmalanYaumiyah.catatanAmalanSiswa', compact(['title','catatanAmaliyah','data_user', 'isiTotal']));
    }

    public function viewTambahCatatan()
    {
        $jenisCatatan = JenisAmalanYaumiyah::all();;

        $title = 'Tambah Catatan Amaliyah | Sistem Informasi Asrama SCB'; 
        return view('catatanAmalanYaumiyah.tambahCatatanAmalanSiswa', compact(['jenisCatatan', 'title']));
    }

    public function postCatatan(Request $request)
    {
        $user_id = Auth::user()->id;

        $catatan = CatatanAmaliyah::where('user_id','=', $user_id)->get();
        // dd($catatan);

        $count = (sizeof($request->all())-1)/3;
        // dd($user_id);
        for($index=0; $index<$count; $index++){
            if($catatan != NULL){
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
                        'jumlah' => ($request->input('jumlah_'. $index))+$jumlah_sebelum, 
                        ]);   
                    };
    
                    
    return redirect()->route('viewPageSiswa');

    }

}