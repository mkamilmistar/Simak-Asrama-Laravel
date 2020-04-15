<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatatanHarian extends Model
{
    protected $table = 'catatanHarian';

    protected $fillable = [
        'guru_id',
        'siswa_id',
        'kategori',
        'deskripsi'           
    ];

    public function siswa(){
        return $this->belongsTo(Siswwa::class);
    }
    public function guru(){
        return $this->belongsTo(Guru::class);
    }
}
