<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\User;

class UserController extends Controller
{
    public function index(){
        $data_user = User::all();
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
        return redirect('/profile')->with('sukses', 'Data Berhasil diUpdate');
    }

    public function deleteProfile($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/profile')->with('sukses', 'Data Berhasil Dihapus!');
    }

    public function viewProfile($id)
    {
        $user = User::find($id);
        return view('Profile.profile', compact('user'));
    }

}
