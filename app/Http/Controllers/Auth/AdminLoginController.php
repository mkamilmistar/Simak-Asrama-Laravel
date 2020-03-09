<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        //validasi form data
        $this->validate($request ,[
            'email'     => 'required|email',
            'password'  => 'required|min:6'
        ]);
        
        //attempt untuk login masuk user
        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            //jika sukses, redirect ke lokasi yang sesuai (intended)
            return redirect()->intended(route('admin.dashboard'));
        }
        
        //jika gagal, balik ke login form
        return redirect()
            ->back()
            ->withInput($request->only('email', 'remember'));

    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}
