<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('landings.home', ['title' => 'Beranda | Sistem Informasi Asrama SCB',]);
    }
}