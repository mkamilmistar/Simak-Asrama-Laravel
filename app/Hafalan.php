<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\User;
use App\Surat;
use App\Guru;

class Hafalan extends Model
{
    protected $table = 'hafalan';

    protected $fillable = ['tanggal', 'pm','tm','surat_id','ayat0','ayat1','nilai','pembina_id','siswa_id'];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'pembina_id');      
    }

    public function surat()
    {
        return $this->belongsTo(Surat::class, 'surat_id');      
    }

}