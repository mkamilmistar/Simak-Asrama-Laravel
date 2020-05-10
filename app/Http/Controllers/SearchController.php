<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Siswa;
use App\Guru;
use DB;

class SearchController extends Controller
{
    public function index(){
        return view('search');
    }
    
    public function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('siswa')
        ->where('nama_depan', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->nama_depan.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
}
