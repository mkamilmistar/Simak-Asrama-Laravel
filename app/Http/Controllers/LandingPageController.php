<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LandingPageController extends Controller
{
    public function home()
    {
        if(!Auth::check()) {
            return view('landings.home', ['title' => 'Beranda | Sistem Informasi Asrama SCB',]);
        }else{
            return redirect('/home');
        }
    }
}