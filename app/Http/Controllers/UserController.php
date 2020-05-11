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
            $data_user = User::all();
        }else{
            $data_user = Auth::user();
            return redirect()->back();
        }
        return view('Profile.indexProfile', compact('data_user'));
    }

    public function createProfile(Request $request)
    {
        User::create($request->all());
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
        return redirect()->route('deleteProfile', User::find($id))->with('sukses', 'Data Berhasil Dihapus!');
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
