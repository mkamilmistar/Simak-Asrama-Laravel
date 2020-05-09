<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CatatanHarian extends Model
{
    protected $table = 'catatanHarian';

    protected $fillable = ['guru_id', 'siswa_id', 'kategori', 'deskripsi', 'waktu'];

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
    public function guru(){
        return $this->belongsTo(Guru::class);
    }

}
