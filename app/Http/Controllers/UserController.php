<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\User;
use Auth;

class UserController extends Controller
{
    public function index(){

        if(Auth::user()->role=='pembina'){
            $data_siswa = User::with('siswa')->where('role', 'siswa')->get();
            $data_guru = User::where('role', 'pembina')->get();
        }else{
            $data_siswa = Auth::user();
            return redirect()->back();
        }
        return view('Profile.indexProfile', compact(['data_siswa', 'data_guru']));
    }

    public function createProfile(Request $request)
    {

        $user = new User();
        $user->nama = $request->input('nama');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->jenis_kelamin = $request->input('jenis_kelamin');
        $user->tempat_lahir = $request->input('tempat_lahir');
        $user->tanggal_lahir = $request->input('tanggal_lahir');
        $user->alamat = $request->input('alamat');
        if($request->hasFile('user_image')){
            $request->file('user_image')->move('images/user/',$request->file('user_image')->getClientOriginalName());
            $user->user_image = $request->file('user_image')->getClientOriginalName();
            $user->save();
        }
        $user->save();
        

        $data_siswa = new Siswa([
            'NIS' => $request->input('NIS'),
            'kelas' => $request->input('kelas'),
            'gedung_asrama' => $request->input('gedung_asrama'),
            'kamar_id' => $request->input('kamar_id'),  
        ]);
        // $user->siswa = new Siswa();

        $user->siswa()->save($data_siswa);

        
        // $user = User::create(request()->all());
        // $user->siswa()->create(request()->all());

        
        return redirect ('/profile')->with('sukses', 'Data Berhasil diinput!');
    }

    public function editProfile($id)
    {
        $user = User::find($id);
        return view('Profile.editProfile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);
        $user -> update($request->all());
        //buat upload gambar
        if($request->hasFile('user_image')){
            $request->file('user_image')->move('images/user/',$request->file('user_image')->getClientOriginalName());
            $user->user_image = $request->file('user_image')->getClientOriginalName();
            $user->save();
        }
        return redirect()->route('viewProfile', User::find($id))->with('sukses', 'Data Berhasil diUpdate');
    }

    public function deleteProfile($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/profile')->with('sukses', 'Data Berhasil Dihapus!');
    }

    public function viewProfile($id)
    {
        if(Auth::user()->role=='pembina'){
            $user = User::find($id);
        }
        
        elseif(Auth::id() == $id){
            $user = Auth::user();
            return view('Profile.profile', compact('user'));
        }
        
        else{
            return redirect()->back();
        }
        
        return view('Profile.profile', compact('user'));
    }



}