<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\User;

class UserController extends Controller
{
    public function index(){
        $data_user = User::all();
        return view('Profile.profile', compact('data_user'));
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
        return redirect('/profile')->with('sukses', 'Data Berhasil diUpdate');
    }

    public function deleteProfile($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/profile')->with('sukses', 'Data Berhasil Dihapus!');
    }

}
