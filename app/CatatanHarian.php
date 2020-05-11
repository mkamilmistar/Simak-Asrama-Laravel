<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\User;

class CatatanHarian extends Model
{
    protected $table = 'catatanHarian';

    protected $fillable = ['pembina_id', 'siswa_id', 'kategori', 'deskripsi', 'waktu'];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
    public function pembinaAsrama(){
        return $this->belongsTo(PembinaAsrama::class);
    }

}
