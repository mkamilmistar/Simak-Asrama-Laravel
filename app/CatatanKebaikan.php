<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatatanKebaikan extends Model
{
    protected $table = 'catatanKebaikan';

    protected $fillable = [
        'guru_id',
        'siswa_id',
        'jenis',
        'kegiatan',
        'deskripsi'
    ];

    public function siswa(){
        return $this->belongsTo(Siswwa::class);
    }

    public function guru(){
        return $this->belongsTo(Guru::class);
    }
}
